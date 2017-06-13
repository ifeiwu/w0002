<?php

// 站点信息
function site($data = null)
{
	$site = array();
	
	if (empty($data))
	{
		$data = db()->select('site', '`name`, `value`')->where('state = 1')->all();
	}

	foreach ($data as $item)
	{
		$value = $item['value'];

		if ($value)
		{
			$site[$item['name']] = $value;
		}
	}
	
	return $site;
}

// 预览网站主题
function theme($site)
{
	$theme = $_GET['theme'];
	$skin = $_GET['skin'];
	
	if ($theme && $skin)
	{
		$expire = time() + 1 * 3600;
		$skin = $skin == 'default' ? '' : $skin;
		setcookie('theme', $theme, $expire);
		setcookie('skin', $skin, $expire);
		$site['theme'] = $theme;
		$site['skin'] = $skin;
	}
	elseif (isset($_COOKIE['theme']) && isset($_COOKIE['skin']))
	{
		$site['theme'] = $_COOKIE['theme'];
		$site['skin'] = $_COOKIE['skin'];
	}
	
	return $site;
}

/**
 * SEO优化设置
 *
 * @param string $title 标题
 * @param string $subtitle 副标题
 * @param string $keywords 关键词
 * @param string $description 描述
 * @param string $divider 分割线
 * @return array
 */
function seo($title = '', $subtitle = '', $keywords = '', $description = '', $divider = ' — ')
{
	$data = array();

	if ($title)
	{
		if ($subtitle)
		{
			$data['title'] = $title . $divider . $subtitle;
		}
		else
		{
			$data['title'] = $title;
		}
	}

	if ($keywords)
	{
		$data['keywords'] = $keywords;
	}

	if ($description)
	{
		$data['description'] = $description;
	}

	return $data;
}

/**
 * css活动状态
 * 
 * @param string|array $source 本身
 * @param string|array $target 目标
 * @param boolean $isclass 是否添加class=""
 */
function active($source, $target, $isclass = false)
{
	$value = '';
	
	if (is_array($source) && in_array($target, $source))
	{
		$value = 'active';
	}
	elseif ($source == $target)
	{
		$value = 'active';
	}
	
	if ($value)
	{
		if ($isclass == true)
		{
			echo 'class="' . $value . '"';
		}
		else
		{
			echo $value;
		}
	}
}

// 获取表单令牌
function token()
{
	$timestamp = microtime(true);
	session('_token', $timestamp);

	return md5($timestamp);
}