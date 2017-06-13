<?php
ini_set('error_reporting', E_ALL & ~(E_STRICT | E_NOTICE));
ini_set('display_errors', 0);

$db_config = require __DIR__ . '/config/db.php';
$prefix = $db_config['prefix'];

try {
	$db = _getDatabase($db_config);
	$db->beginTransaction();
	
	if ($view_version < 0.2)
	{
		$db->exec('ALTER TABLE '.$prefix.'admin ADD rbac VARCHAR(10)');
		$db->exec('UPDATE '.$prefix.'admin SET `rbac`=\'super\' WHERE `name`=\'admin\'');
		$db->exec('ALTER TABLE '.$prefix.'admin ADD `json` VARCHAR(255)');
		$db->exec('ALTER TABLE '.$prefix.'admin DROP COLUMN `last_time`');
		$db->exec('ALTER TABLE '.$prefix.'admin DROP COLUMN `login_count`');
		$db->exec('ALTER TABLE '.$prefix.'admin DROP COLUMN `last_ip`');
		$db->exec('ALTER TABLE '.$prefix.'admin DROP COLUMN `issuper`');
	}
	
	if ($view_version < 0.3)
	{
		$db->exec('ALTER TABLE '.$prefix.'item ADD `url_target` VARCHAR(10)');
	}
	
	if ($view_version < 0.5)
	{
		$db->exec("ALTER TABLE {$prefix}item ADD `alias` VARCHAR(255) DEFAULT ''");
		$db->exec("ALTER TABLE {$prefix}item ADD `join2` VARCHAR(255) DEFAULT ''");
		$db->exec("ALTER TABLE {$prefix}item MODIFY COLUMN `album` varchar(10000) DEFAULT ''");
	}

	$db->commit();
	
} catch (PDOException $e) {
	$db->rollBack();
    _log($view_version . ' ' . $e->getMessage());
	return false;
}

return true;

//连接数据库
function _getDatabase($config)
{
	$dsn = $config['type'].':host='.$config['host'].';dbname='.$config['name'].';port='.$config['port'];
	$user = $config['user'];
	$password = $config['pass'];

	$db = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.$config['charset']));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	return $db;
}

//删除目录
function _removeDir($path)
{
	if ($handle = @opendir($path))
	{
		while (false !== ($item = readdir($handle)))
		{
			if ($item != '.' && $item != '..')
			{
				if (is_dir("$path/$item"))
				{
					_removeDir("$path/$item");
				}
				else
				{
					@unlink("$path/$item");
				}
			}
		}
		
		@rmdir($path);
		
		closedir($handle);
	}
}

//日志记录
function _log($m)
{
	$dirname = dirname(__FILE__) . '/data/log/';
	@mkdir($dirname, true);
	file_put_contents($dirname . 'upgrade', date('H:i:s', time()) . ' ' . getenv('REMOTE_ADDR') . " $m\n", FILE_APPEND);
}