<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	$model->id,
);
?>

<h3 class="title">查看 Admin #<?php echo $model->id; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_name',
		'real_name',
		'password',
		'gender',
		'phone',
		'email',
		'qq',
		'status',
		'login_num',
		'last_login_time',
		'last_login_ip',
		'create_time',
		'update_time',
	),
)); ?>
