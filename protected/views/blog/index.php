<?php $this->pageTitle = '24INT'; ?>
<!-- Blog List -->
<div class="row">
	<div class="large-9 columns">
		<?php if($blogs){ foreach ($blogs as $one) { ?>
			<div class="blog-item">
				<h2 class="blog-title"><a href="<?php echo Yii::app()->createUrl('blog/view', array('id' => $one->id)); ?>"><?php echo $one->title; ?></a></h2>
				<p class="info">
				<?php echo date('Y-m-d',$one->create_time); ?>
				<a href="<?php echo Yii::app()->createUrl('blog/index', array('pid' => $one->pid)); ?>">分类：<?php echo Category::getName($one->pid); ?></a>
				阅读：<?php echo mt_rand(1, 99)+$one->views; if($one->source){ echo ' 来源：'.$one->source; } ?>
				</p>
				<p class="excerpt"><?php echo $one->brief; ?></p>
				<a class="readmore-link" href="<?php echo Yii::app()->createUrl('blog/view', array('id' => $one->id)); ?>">继续阅读 -></a>
			</div>
		<?php } }else{ ?>
			<div class="blog-item">
				<?php echo '没有相关文章！'; ?>
			</div>
		<?php } ?>
		<div id="blog-pagination" class="pagination-centered">
			<?php
			$this->widget('CLinkPager',array(
				'header'=>'',
				'firstPageLabel' => '首页',
				'lastPageLabel' => '末页',
				'prevPageLabel' => '<',
				'nextPageLabel' => '>',
				'pages' => $page,
				'maxButtonCount'=>10	//按钮大小
				)
			);
			?>
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
						<h4>分类</h4>
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
		
		<div class="widget-item row">
			<div class="large-12 columns">
				<div class="inner-widget-item">
					<div class="custom-text-widget">
						<h4>说明</h4>
						<p>
							部分文章源于网络，如有侵权及时联系，我会立即删除。
							QQ：214653771.
						</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>

</div>