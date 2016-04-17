
<section class="blockGroup">
	<h2 itemprop="name headline" class="s_title"><?php echo $blog->title; ?></h2>
	<p class="p_time"><?php echo date('Y-m-d', $blog->create_time); ?><a href="<?php echo Yii::app()->createUrl('blog/index', array('pid' => $blog->pid)); ?>"> | <?php echo Category::getName($blog->pid); ?></a> | <?php echo $blog->views; ?></p><br>
	<article class="post single" itemscope itemtype="http://schema.org/BlogPosting">
		<?php echo $blog->content; ?>
	</article>
	
	<section class="ending">
	
	<div class="reward">
	赏
	<ul>
	
	<li><img src="/static/images/w.jpg">微信打赏</li>
	</ul>
	</div>

	<div class="about">
	<img alt="" src="http://7xssk6.com2.z0.glb.clouddn.com/14604352399984.jpg" srcset="http://7xssk6.com2.z0.glb.clouddn.com/14604352399984.jpg" class="avatar avatar-80 photo" height="80" width="80"><p>世界上唯一不变的，就是一切都在变。</p>
	</div>
	</section>
	
</section>

