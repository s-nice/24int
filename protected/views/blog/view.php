<div class="row">
	<div class="large-9 columns">

		<!-- Blog Content -->
		<div class="blog-item single">
			<h2 class="blog-title"><?php echo $blog->title; ?></h2>
			<p class="info">
			<?php echo date('Y-m-d',$blog->create_time); ?>
			<a href="<?php echo Yii::app()->createUrl('blog/index', array('pid' => $blog->pid)); ?>">分类：<?php echo Category::getName($blog->pid); ?></a>
			阅读：<?php echo mt_rand(1, 99)+$blog->views; ?>
			</p>
			<?php echo $blog->content; ?>
		</div>

	</div>

	<!-- Blog Sidebar -->
	<div id="sidebar-wrapper" class="large-3 columns">
		<div class="widget-item row">
			<div class="large-12 columns">
				<div class="inner-widget-item">
					<div class="search-widget">
						<h4>搜索</h4>
						<form method="post" action="<?php echo Yii::app()->createUrl('blog/index'); ?>">
							<input type="text" name="keyword" class="no-margin-bottom" placeholder="Type and hit enter ...">
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="widget-item row">
			<div class="large-12 columns">
				<div class="inner-widget-item">
					<div class="posts-widget">
						<h4>最近文章</h4>
						<ul>
							<?php if($recent){ foreach ($recent as $one) { ?>
								<li>
									<div class="post-title">
										<a href="<?php echo Yii::app()->createUrl('blog/view', array('id' => $one->id)); ?>"><?php echo $one->title; ?></a><span class="date"><?php echo date('Y-m-d', $one->create_time); ?></span>
									</div>
								</li>
							<?php }} ?>

						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="widget-item row">
			<div class="large-12 columns">
				<div class="inner-widget-item">
					<div class="category-widget">
						<h4>文章分类</h4>
						<ul>
							<?php if ($catelist){ foreach ($catelist as $key => $one){ ?>
								<li>
									<a href="<?php echo Yii::app()->createUrl('blog/index', array('pid' => $key)); ?>"><?php echo $one; ?></a>
								</li>
							<?php }} ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--
		<div class="widget-item row">
			<div class="large-12 columns">
				<div class="inner-widget-item">
					<div class="custom-text-widget">
						<h4>Custom Text</h4>
						<p>
							Ut enim ad minim veniam consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam consectetur adipisicing elit, sed do eiusmod
						</p>
					</div>
				</div>
			</div>
		</div>		
		-->
	</div>

</div>