<?php
namespace controller;

use ifeiwu\Controller;

class Stats extends Controller
{
	private $db;
	
	private $useragent = '';
	
	private $isMobile = false;
	

	public function _init()
	{
		$this->useragent = $_SERVER['HTTP_USER_AGENT'];
		
		$this->db = db();
		
		if (strpos($this->useragent, 'Mobile') !== false || strpos($this->useragent, 'Android') !== false)
		{
			$this->isMobile = true;
		}
	}

	public function index($much, $unit)
	{
		$ip = $this->_getIP();
		$uv = $_COOKIE['uv'];
		
		// 访客记录
		if (is_null($uv))
		{
			$over_time = mktime(0, 0, 0, date('m'), date('d')+1, date('Y'))-time();
			$uv = md5(microtime() . $ip . rand());
			setcookie('uv', $uv, time() + $over_time);
		}
		
		$postdata = array();
		$postdata['url'] = $_POST['url'];
		$postdata['screen'] = $_POST['screen'];
		$postdata['referer'] = $_POST['referer'];
		$postdata['cookie'] = $uv;
		$postdata['ip'] = $ip;
		$postdata['date'] = date('Y-m-d');
		$postdata['time'] = time();
		$uadata = $this->getUaData();
		$seodata = $this->_getSeoData($postdata['referer']);
		
		$data = array_merge($postdata, $seodata, $uadata, $this->_getLocal($ip));

		// 添加访问数据
		$this->db->insert('stats', $data);
		
		// 隔天更新一次
		if (strtotime($_POST['date']) < strtotime($postdata['date']))
		{
			// 统计数据
			$this->stats();
	
			// 删除过期数据
			if ($much = $_POST['much'] && $unit = $_POST['unit'])
			{
				$this->db->delete('stats', 'time < ' . strtotime('-' . $much . ' ' . $unit));
			}
		}
	}
	
	protected function stats()
	{
		$sdata = array('years'=>array(), 'months'=>array(), 'days'=>array());
		$table = $this->db->getPrefix() . 'stats';
		
		//每天
		$days = date('j');
		for ($i = 1; $i <= $days; $i++)
		{
			$day = $days - $i;
			$sdata['days'][$i.'日'] = array(
				'uv' => $this->_getDaysCount($table, $day, 'cookie'),
				'pv' => $this->_getDaysCount($table, $day, 'id'),
				'ip' => $this->_getDaysCount($table, $day, 'ip')
			);
		}
		
		$month = date('m');
		for ($i = 0; $i <= 1; $i++)
		{
			$month = $month - $i;
			$sdata['months'][] = array(
				'month' => $month,
				'uv' => $this->_getMonthsCount($table, $i, 'cookie'),
				'pv' => $this->_getMonthsCount($table, $i, 'id'),
				'ip' => $this->_getMonthsCount($table, $i, 'ip')
			);
		}
		
		$sdata['years'][] = array(
			'year' => date('Y'),
			'uv' => $this->_getYearsCount($table, 0, 'cookie'),
			'pv' => $this->_getYearsCount($table, 0, 'id'),
			'ip' => $this->_getYearsCount($table, 0, 'ip')
		);
		
		
		// 保存统计
		$where = "name = 'stats_data' OR name = 'stats_date'";
		
		if ($this->db->select('site')->where($where)->has())
		{
			$this->db->update('site', array('value'=>json_encode($sdata)), "name = 'stats_data'");
			$this->db->update('site', array('value'=>date('Y-m-d')), "name = 'stats_date'");
		}
		else
		{
			$this->db->insert('site', array(
				'state' => 0,
				'name' => 'stats_data',
				'value' => json_encode($sdata)
			));
			
			$this->db->insert('site', array(
				'state' => 1,
				'name' => 'stats_date',
				'value' => date('Y-m-d')
			));
		}
		
	}
	
	private function _getDaysCount($table, $day, $group)
	{
		if ($group != 'id')
		{
			return $this->db->query("SELECT COUNT(t.num) FROM (SELECT COUNT(*) num FROM {$table} WHERE date_format(date,'%Y-%m-%d') = date_format(SUBDATE(now(),interval {$day} day),'%Y-%m-%d') GROUP BY `{$group}`) t")->get(0);
		}
		else
		{
			return $this->db->query("SELECT COUNT(*) num FROM {$table} WHERE date_format(date,'%Y-%m-%d') = date_format(SUBDATE(now(),interval {$day} day),'%Y-%m-%d')")->get(0);
		}
	}
	
	private function _getMonthsCount($table, $month, $group)
	{
		if ($group != 'id')
		{
			return $this->db->query("SELECT COUNT(t.num) FROM (SELECT COUNT(*) num FROM {$table} WHERE date_format(date,'%Y-%m') = date_format(SUBDATE(now(),interval {$month} month),'%Y-%m') GROUP BY `{$group}`) t")->get(0);
		}
		else
		{
			return $this->db->query("SELECT COUNT(*) num FROM {$table} WHERE date_format(date,'%Y-%m') = date_format(SUBDATE(now(),interval {$month} month),'%Y-%m')")->get(0);
		}
	}
		
	private function _getYearsCount($table, $year, $group)
	{
		if ($group != 'id')
		{
			return $this->db->query("SELECT COUNT(t.num) FROM (SELECT COUNT(*) num FROM {$table} WHERE date_format(date,'%Y') = date_format(SUBDATE(now(),interval {$year} year),'%Y') GROUP BY `{$group}`) t")->get(0);
		}
		else
		{
			return $this->db->query("SELECT COUNT(*) num FROM {$table} WHERE date_format(date,'%Y') = date_format(SUBDATE(now(),interval {$year} year),'%Y')")->get(0);
		}
	}

	private function getUaData()
	{
		$browser = $platform = array();
		
		//							  1/ver 		  2/sys 	if Version/ exists			 3/ver       |OR| 4/sys 					 5/ver
		if( preg_match( '/(?:Opera\/([0-9\.\w]+)\s\((.+?)\)(?:(?=.*Version\/).*Version\/([0-9\.\w]+)|.*))|\((.+?)\).+?Opera(?:[\s\/]([0-9\.\w]+))?/', $this->useragent, $opera ) )
		{
			$browser['browser'] = 'Opera';
			$browser['browser_version'] = isset( $opera[5] ) ? $opera[5] : ( isset( $opera[3] ) ? $opera[3] : ( isset( $opera[1] ) ? $opera[1] : '' ) );
			
			$platform = $this->_getPlatform(isset( $opera[4] ) ? $opera[4] : $opera[2]);
			
		}//									  1/ver 						2/sys 		   |OR| 3/sys				  	 4/ver											  		1/sys 				  	2/ver
		else if( preg_match( '/(?:MSIE\s+([0-9\.\w]+)(?:(?=.+Win).+?(Win.+[0-9\.\w]+)|.*))|\((.+?);.+?Trident.*?rv:([0-9\.\w]+)/i', $this->useragent, $ie ) )
		{
			$browser['browser'] = 'IE';
			$browser['browser_version'] = isset( $ie[4] ) ? $ie[4] : $ie[1];
			
			$platform = $this->_getPlatform(isset( $ie[3] ) ? $ie[3] : ( isset($ie[2]) ? $ie[2] : '' ));

		}// 					 1/sys			  			  2/ver							    	  3/ver
		else if( preg_match( '/\((.+?)(?:(?=.*rv:)[\s;]+rv:([\.\d\w]+)|\)).+?Gecko.+?Firefox[\s\/]?([\w\d\.]+)?/i', $this->useragent, $mozilla ) )
		{
			$browser['browser'] = 'Firefox';
			$browser['browser_version'] = isset( $mozilla[3] ) ? $mozilla[3] : $mozilla[2];
			
			$platform = $this->_getPlatform($mozilla[1]);

		}//						 	1/sys				2/ver 	|OR|		 3/ver 		  4/sys 	if Version defined			  5/ver
		else if( preg_match( '/(?:\((.+?)\).+?Chrome\/([\d\.\w]+))|Chrome\/([\d\.\w]+).+?\((.+?)\)(?:(?=.*Version\/).+?Version\/([\d\w\.]+)|.*?)/i', $this->useragent, $chrome ) )
		{
			$browser['browser'] = 'Chrome';
			$browser['browser_version'] = isset( $chrome[5] ) ? $chrome[5] : ( isset( $chrome[3] ) ? $chrome[3] : $chrome[2] );
			
			$platform = $this->_getPlatform(isset( $chrome[4] ) ? $chrome[4] : ( isset( $chrome[1] ) ? $chrome[1] : '' ));

		}// 							1/sys 	  MUST			if we have Version/			  2/ver 		  if we have Safari/		 3/ver
		else if( preg_match( '/\((.+?)\).+?AppleWebKit(?:(?=.*Version\/).*?Version\/([\d\w\.]+)|.*?)(?:(?=.*Safari\/).*?Safari\/([\d\w\.]+)|.*?)/i', $this->useragent, $safari ) )
		{
			$browser['browser'] = 'Safari';
			$browser['browser_version'] = isset( $safari[3] ) ? $safari[3] : ( isset( $safari[2] ) ? $safari[2] : '' );
			
			$platform = $this->_getPlatform($safari[1]);
		}
		else
		{
			$browser['browser'] = '其它';
			
			$a = strpos( $this->string, '(' )+1;
			$b = strpos( $this->string, ')' );

			$platform = $this->_getPlatform(trim( mb_substr( $this->useragent, $a, $b-$a ) ));
		}
		
		return array_merge($browser, $platform);
	}

	private function _getPlatform($system)
	{
		$platform = array();
		
		// Mobile
		if( $this->isMobile )
		{
			//		  					1/ver 						 2/device
			if( preg_match( '/Android.*?([\d\.]+)(?:(?=.*?Build).+?\b([\w\d\_\-\s]+)\b\sBuild|.*?)/i', $system, $info ) )
			{
				$platform['os'] = 'Android';
				$platform['os_version'] = $info[1];
				$platform['mobile'] = isset( $info[2] ) ? $info[2] : '';

			}// 							1/device_name 					2/ver
			else if( preg_match( '/((?:iPhone)|(?:iPad)|(?:iPod)).+?OS\s([\d\_\w\.]+)/i', $system, $info ) )
			{
				$platform['os'] = 'iOS';
				$platform['os_version'] = str_replace( '_', '.', $info[2] );
				$platform['mobile'] = $info[1];
			}// 												1/ver 	 if1 			2/brand 			 if2				3/ Model   else2  else1
			else if( preg_match( '/Windows\sPhone\s(?:OS\s)?([\d\_\w\.]+)(?: (?=.*?(NOKIA|SAMSUNG|LG)) .+?\2 (?: (?=.{4,}$) .*?\b([\w\d\-\s]+)\b|.*?  )|.*?)/x', $system, $info ) )
			{
				$platform['os'] = 'Windows Phone';
				$platform['os_version'] = str_replace( '_', '.', $info[1] );
				$platform['mobile'] = @$info[2] . ' ' . @$info[3];
			}

		}						// Computer
		else if( strpos( $system, 'Macintosh' ) !== false )
		{
			$platform['os'] = 'Mac';
			
			if( preg_match( '/(\w+)\sMac\sOS\sX\s?([\d_\.]+)?/i', $system, $info ) )
			{
				$platform['os_version'] = isset( $info[2] ) ? str_replace( '_', '.', $info[2] ) : '';
			}

		}						// Windows OR compatible
		else if( strpos( $system, 'Windows' ) !== false || strpos( $system, 'compatible' ) )
		{
			// Windows
			$platform['os'] = 'Windows';

			// 									1/ver
			if( preg_match( '/Windows\s(?:NT\s)?([\.\d]+)/i', $system, $info ) )
			{
				$platform['os_version'] = $info[1];
			}
		}						
		else if( strpos( $system, 'X11' ) !== false || strpos( $system, 'Linux' )!== false )
		{		
			// Linux
			$platform['os'] = 'Linux';
		}
		
		return $platform;
	}

	// IP地理位置(淘宝接口)
	private function _getLocal($ip)
	{
		$data = array();
		
		$res = json_decode(file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip=' . $ip), true);

		if ($res['code'] === 0)
		{
			$lodata = $res['data'];
			
			$data['ip_isp'] = $lodata['isp'];
			$data['ip_country'] = $lodata['country'];
			$data['ip_region'] = $lodata['region'];
			$data['ip_area'] = $lodata['area'];
			$data['ip_city'] = $lodata['city'];
		}
		
		return $data;
	}
	
	// 获取搜索引擎来源的关键词
	private function _getSeoData($referer)
	{
		$data = array();
		$domains = array('baidu', 'sogou', 'so', 'bing', 'yahoo', 'google');
		
		preg_match('@^(?:http[s]?://)?([^/]+)@i', $referer, $url);
		$url = $url[1];
		
		foreach ($domains as $domain)
		{
			if (strstr($url, $domain)) {
				break;
			} else {
				$domain = '';
			}
		}

		switch ($domain) {
			case 'baidu':
				preg_match('/baidu.+wo?r?d=([^\\&]*)/is', $referer, $keyword);
				$data['keyword'] = urldecode($keyword[1]);
				$data['referer'] = '百度';
				break;
				
			case 'sogou':
				preg_match('/sogou.+query=([^\\&]*)/is', $referer, $keyword);
				$data['keyword'] = urldecode($keyword[1]);
				$data['referer'] = '搜狗';
				break;
			
			case 'so':
				preg_match('/so.+q=([^\\&]*)/is', $referer, $keyword);
				$data['keyword'] = urldecode($keyword[1]);
				$data['referer'] = '360搜索';
				break;

			case 'bing':
				preg_match('/bing.+q=([^\\&]*)/is', $referer, $keyword);
				$data['keyword'] = urldecode($keyword[1]);
				$data['referer'] = '必应';
				break;
				
			case 'yahoo':
				preg_match('/yahoo.+p=([^\\&]*)/is', $referer, $keyword);
				$data['keyword'] = urldecode($keyword[1]);
				$data['referer'] = '雅虎';
				break;
				
			case 'google':
				preg_match('/google.+q=([^\\&]*)/is', $referer, $keyword);
				$data['keyword'] = urldecode($keyword[1]);
				$data['referer'] = '谷歌';
				break;
			
			default:
				$data['keyword'] = '';
				
				if ($referer == '' || strstr($referer, DOMAIN))
				{
					$data['referer'] = '直接';
				}
				else
				{
					$data['referer'] = $referer;
				}
				
				break;
		}
		
		return $data;
	}

	// 获取客户端IP
	private function _getIP()
	{
		if (isset($_SERVER))
		{
			if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
			{
				$realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
				$realip = explode(",", $realip);
				$realip = $realip[0];
				$realip = empty($realip) ? ($_SERVER["REMOTE_ADDR"]) : ($realip);
			}
			elseif (isset($_SERVER["HTTP_CLIENT_IP"]))
			{
				$realip = $_SERVER["HTTP_CLIENT_IP"];
			}
			else
			{
				$realip = $_SERVER["REMOTE_ADDR"];
			}
		}
		else
		{
			if (getenv("HTTP_X_FORWARDED_FOR"))
			{
				$realip = getenv("HTTP_X_FORWARDED_FOR");
				$realip = explode(",", $realip);
				$realip = $realip[0];
				$realip = empty($realip) ? ($_SERVER["REMOTE_ADDR"]) : ($realip);
			}
			elseif (getenv("HTTP_CLIENT_IP"))
			{
				$realip = getenv("HTTP_CLIENT_IP");
			}
			else
			{
				$realip = getenv("REMOTE_ADDR");
			}
		}

		return $realip;
	}
}
