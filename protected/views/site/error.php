<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div id="intro" class="row no-margin-bottom page-404">
	<div class="large-9 large-centered columns">
		<h1>404 <span>Page Not Found</span></h1>
		<p>
			<?php echo $error['message']; ?>
			<br>
			Please <a href="<?php echo Yii::app()->createUrl('blog/index'); ?>">click here</a> to go back to our home page or use the search form below.
		</p>
	</div>
</div>