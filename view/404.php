<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>找不到网页  - <?php echo $message;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="<?php $this->url('asset/css/reset.css');?>">
	<style>
	.container{
		font-family: "Helvetica Neue", "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", "Hiragino Kaku Gothic Pro", Meiryo, "Malgun Gothic", sans-serif;
		font-size: 14px;
		text-align: center;
	}
	.container>h1{
		font-size: 26px;
	    margin-top: 15%;
	    font-weight: lighter;
	    letter-spacing: 3px;
	}
	.container>p{
	    letter-spacing: 2px;
	}
	.container>a{
	    display: inline-block;
	    margin-top: 30px;
	    padding: 6px 15px;
	    font-size: 12px;
	    background-color: #000;
	    color: #fff;
	    text-decoration: none;
	    border-radius: 3px;
	}
	</style>
</head>
<body>
	<div class="container">
		<h1>找不到网页</h1>
		<p>抱歉，你试图查看的页面已经不存在了。</p>
		<a href="<?php echo $this->url();?>">回到首页</a>
	</div>
</body>
</html>
