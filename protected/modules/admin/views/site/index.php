<?php
/* @var $this SiteController */
/* @var $model Site */

$this->breadcrumbs=array(
	'Sites'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
?>

<div class='col-lg-12 page-title'>
	<h1 class="title pull-left">网站设置</h1>
</div>

<div class="col-lg-12">
<?php $this->renderPartial('_form', array(
'model'=>$model,
)); ?>
</div>