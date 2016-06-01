
<section class="blockGroup">
	<?php if ($blogs) {
		foreach ($blogs as $one) { ?>
			<article class="post post-list" itemscope="" itemtype="http://schema.org/BlogPosting">
				
				<h2 itemprop="name headline" class="title"><a href="<?php echo Yii::app()->createUrl('blog/view', array('id' => $one->id)); ?>"><?php echo $one->title; ?></a></h2>
		<div class="p_time"><?php echo date('Y-m-d', $one->create_time); ?><a href="<?php echo Yii::app()->createUrl('blog/index', array('pid' => $one->pid)); ?>"> | <?php echo Category::getName($one->pid); ?></a> | <?php echo $one->views; ?></div>
				<p><?php echo mb_substr(strip_tags($one->content),0,200,'utf-8'); ?>……</p>
			</article>

			<div class="clearer"></div>
	<?php }}else{ ?>
		<p>
			<?php echo '没有相关文章！'; ?>
		</p>
	<?php } ?>
</section>
<div class="clearer"></div>
<nav class="navigator">
	<?php
	$this->widget('CLinkPager',array(
		'cssFile'=>"/static/style.css",
		'header'=>'',
		'firstPageLabel' => false,
		'lastPageLabel' => false,
		'prevPageLabel' => '<i class="iconfont"></i>',
		'nextPageLabel' => '<i class="iconfont"></i>',
		'pages' => $page,
		'maxButtonCount'=>0	//按钮大小
		)
	);
	?>
</nav>




