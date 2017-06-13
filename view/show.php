<article class="show">
	<a href="<?php echo $_SERVER['HTTP_REFERER'];?>#events" class="back">
		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
		    <path fill="#acacac" d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
		</svg>返回
	</a>
	<h1 class="title">
		<span><?php echo $item['title'];?></span>
	</h1>
	<time datetime="<?php echo date('Y-m-d',$item['ctime']);?>" pubdate="pubdate" class="time"><?php echo date("M d Y",time());?></time>
	<div class="content">
		<?php echo $this->decode($item['content']);?>
	</div>
</article>