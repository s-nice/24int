<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div style="min-height: 300px" id="intro" class="row no-margin-bottom page-404">
	<div class="large-9 large-centered columns">
		<h1>404 <span>您要找的页面不存在！</span></h1>
		<br>
		<p>
			<?php //echo $error['message']; ?>
			请 <a href="<?php echo Yii::app()->createUrl('blog/index'); ?>">点击此处</a> 返回首页.
		</p>
	</div>
</div>