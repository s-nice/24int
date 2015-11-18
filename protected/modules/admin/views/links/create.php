<?php
/* @var $this LinksController */
/* @var $model Links */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	'Create',
);
?>

<div class='col-lg-12 page-title'>
	<h1 class="title pull-left">创建 友情链接</h1>
	<a class="btn btn-primary pull-right" href="<?php echo Yii::app()->controller->createUrl('admin'); ?>">返回</a>
</div>

<div class="col-lg-12">
<?php $this->renderPartial('_form', array(
'model'=>$model,
)); ?>
</div>
