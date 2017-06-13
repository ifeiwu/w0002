<section class="events events2">
	<a href="<?php echo $this->url();?>" class="back">
		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
		    <path fill="#acacac" d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
		</svg>首页
	</a>
	<ul class="ul items">
		<?php
		foreach ($events as $key => $value):
			$url = $value['url'];
		?>
		<li>
			<a href="<?php echo $this->url($url?$url:'event/'.$value['id']);?>" target="<?php echo $url?$value['url_target']:'';?>">
				<h1><?php echo $value['title'];?></h1>
				<p><?php echo $value['summary'];?></p>
				<time><?php echo date("M d Y",time());?></time>
			</a>
		</li>
		<?php endforeach;?>
	</ul>
	<?php
	ifeiwu\Loader::import('extend/Paginator');
	
	$totalItems = $count;
	$itemsPerPage = $perpage;
	$currentPage = $p;
	$urlPattern = $this->url('events?p=(:num)');

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