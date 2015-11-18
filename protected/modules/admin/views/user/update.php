<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<div class='col-lg-12 page-title'>
	<h1 class="title pull-left">更新用户  <?php echo $model->user_name; ?></h1>
	<a class="btn btn-primary pull-right" href="<?php echo Yii::app()->controller->createUrl('admin'); ?>">返回</a>
</div>

<div class="col-lg-12">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>