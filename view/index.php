<section class="works">
	
	<?php if (count($category) > 1):?>
	<ul class="ul category" id="category">
	    <li <?php echo active('', $_GET['pid']);?>>
	    	<a href="<?php echo $this->url('#category');?>">全部</a>
	    </li>
	    <?php foreach ($category as $value):?>
	    <li <?php echo active($value['id'], $_GET['pid']);?>>
	    	<a href="<?php echo $this->url('?pid='.$value['id'].'#category');?>"><?php echo $value['title'];?></a>
	    </li>
	    <?php endforeach;?>
	</ul>
	<?php endif;?>
		
	<?php if ($works):?>
	<script>var albums = new Array();</script>
	<div class="items clearfix">
	    <?php
		foreach ($works as $key => $value):
			$id = $value['id'];
			$title = $value['title'];
	    	$image = $value['image'];
			$image_path = $value['image_path'];
			$utime = $value['utime'];
	    ?>
	    <figure>
	    	<a href="<?php echo $this->url($image_path.'/'.$image, $utime);?>" data-id="<?php echo $id;?>">
	    		<script>
	    		<?php
	    		$album = unserialize($value['album']);
				if ($album) {
					$album['image_path'] = $image_path;
				}
				echo 'albums['.$id.'] = '.json_encode($album).';';
				?>
	    			
	    		</script>
	    		<img src="<?php echo $this->url($image_path.'/'.$image, $utime);?>" alt="<?php echo $title;?>">
	    	</a>
    		<figcaption>
    			<h3><?php echo $title;?></h3>
    			<time><?php echo date("M d Y", $value['ctime']);?></time>
    		</figcaption>
    	</figure>
	    <?php endforeach;?>
	</div>
	<?php else:?>
	<div class="no-data">没有找到相关数据！</div>
	<?php endif;?>
		
	<?php
	ifeiwu\Loader::import('extend/Paginator');
	
	$totalItems = $count;
	$itemsPerPage = $perpage;
	$currentPage = $p;
	$urlPattern = $this->url('?p=(:num)#category');

	$paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
	$paginator->setMaxPagesToShow(4);
	
	if ($paginator->getNumPages() > 1):
	?>
	<ul class="ul pagination clearfix">
        <?php if ($paginator->getPrevUrl()): ?>
            <li><a href="<?php echo $paginator->getPrevUrl(); ?>">上一页</a></li>
        <?php else:?>
        	<li class="disabled"><a>上一页</a></li>
        <?php endif; ?>

        <?php foreach ($paginator->getPages() as $page): ?>
            <?php if ($page['url']): ?>
                <li <?php echo $page['isCurrent'] ? 'class="active"' : ''; ?>>
                    <a href="<?php echo $page['url']; ?>"><?php echo $page['num']; ?></a>
                </li>
            <?php else: ?>
                <li class="disabled"><span><?php echo $page['num']; ?></span></li>
            <?php endif; ?>
        <?php endforeach; ?>

        <?php if ($paginator->getNextUrl()): ?>
            <li><a href="<?php echo $paginator->getNextUrl(); ?>">下一页</a></li>
        <?php else:?>
        	<li class="disabled"><a>下一页</a></li>
        <?php endif; ?>
    </ul>
	<?php endif;?>
</section>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<section class="events" id="events">
	<ul class="ul items">
		<?php
		foreach ($events as $key => $value):
			$url = $value['url'];
		?>
		<li>
			<a href="<?php echo $this->url($url?$url:'event/'.$value['id']);?>" target="<?php echo $url?$value['url_target']:'';?>">
				<h1><?php echo $value['title'];?></h1>
				<p><?php echo $value['summary'];?></p>
			</a>
		</li>
		<?php endforeach;?>
		<li class="more">
			<a href="<?php echo $this->url('events');?>">More</a>
		</li>
	</ul>
</section>

<section class="about">
	<ul class="ul">
		<li>
	    	<div>
		    	<h1>About</h1>
		    	<p><?php echo $site['about_content'];?></p>
			</div>
		</li>
		<li>
			<div>
				<ul class="ul sns">
					<?php
					foreach ($contacts as $key => $value):
						$image_path = 'data/contact';
						$url = $value['url'];
						$url_type = $value['url_type'];
						if ($url_type=='image') {
							$url = $this->url($image_path.'/'.$url);
						} else if ($url_type!=='url') {
							$url = $url_type . $url;
						}
					?>
					<li>
						<a href="<?php echo $url;?>" 
							<?php echo $url_type=='url' ? 'target="_blank"' : '';?> 
							<?php echo $url_type=='image' ? 'class="image"' : '';?>><?php echo $value['title'];?>
							<?php
							if ($url_type=='image') {
								echo '<span><img src="'.$url.'"></span>';
							}
							?>
						</a>
					</li>
					<?php endforeach;?>
				</ul>
			</div>
		</li>
	</ul>
</section>