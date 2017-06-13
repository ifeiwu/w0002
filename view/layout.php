<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="renderer" content="webkit">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site['title'];?></title>
    <meta name="keywords" content="<?php echo $site['keywords'];?>">
    <meta name="description" content="<?php echo $site['description'];?>">
    	
    <!--[if lt IE 9]>
    <script>window.location.href='http://www.ifeiwu.com/ie-browser-upgrade.html';</script>
    <![endif]-->
    	
    <link rel="apple-touch-icon" href="<?php echo $this->url('data/apple-touch-icon.png');?>">
    <link rel="icon" type="image/png" href="<?php echo $this->url('data/favicon.png');?>">

    <link rel="stylesheet" href="<?php echo $this->url('asset/css/main.min.css');?>">
    	
    <?php if($site['skin']):?>
    <link rel="stylesheet" href="<?php echo $this->url('asset/css/skin/'.$site['skin'].'.css');?>">
    <?php endif;?>
    <?php if($site['style']):?>
    <link rel="stylesheet" href="<?php echo $this->url('asset/css/'.$site['style'].'.css');?>">
	<?php endif;?>
		
	<link rel="stylesheet" href="<?php echo $this->url('asset/js/photoswipe/photoswipe.css');?>"> 
	<link rel="stylesheet" href="<?php echo $this->url('asset/js/photoswipe/default-skin/default-skin.css');?>"> 
		
	<script>
	<?php
	$ifeiwu['domain'] = $this->request->domain();
	$ifeiwu['baseurl'] = $this->request->root();
	echo 'var ifeiwu = ' . json_encode($ifeiwu) . ';';
	?>
	</script>
</head>
<body>
	
	<div class="container">
		<?php if ($view_name=='index'):?>
		<header>
			<img src="<?php echo $this->url('data/'.($this->request->isMobile()?$site['header_image_m']:$site['header_image_pc']));?>" alt="<?php echo $site['site_name'];?>">
		</header>
		<?php endif;?>
	
	    {__CONTENT__}
	    	
	    <footer <?php echo $view_name=='events'?'class="line"':'';?>>
	    	<?php echo $site['footer'];?>
	    </footer>
	</div>
	
	<script src="<?php echo $this->url('asset/js/jquery.js');?>"></script>
	<script src="<?php echo $this->url('asset/js/main.js');?>"></script>
	<script src="<?php echo $this->url('asset/js/restive.js');?>"></script>
	<script src="<?php echo $this->url('asset/js/trunk8.js');?>"></script>
	<script src="<?php echo $this->url('asset/js/photoswipe/photoswipe.min.js');?>"></script> 
	<script src="<?php echo $this->url('asset/js/photoswipe/photoswipe-ui-default.min.js');?>"></script>
	
	<?php
	if ($site['stats_open'] == 1)
	{
		$squery = http_build_query(array(
				'r'=>$this->request->root(),
				'm'=>$site['stats_much'],
				'u'=>$site['stats_unit'],
				'd'=>$site['stats_date']
			)
		);
		
		echo '<script src="' . $this->url('asset/js/stats.js?' . $squery) . '"></script>';
	}
	
	if ($site['stats3_open'] == 1) { echo $this->decode($site['stats3_code']); }
	?>
	
</body>
</html>
