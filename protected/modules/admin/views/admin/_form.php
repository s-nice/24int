<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
?>

<div class="content-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admin-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<?php if( Yii::app()->user->hasFlash('success')): ?>
	<div class="info"><?php echo Yii::app()->user->getFlash('success'); ?></div>
<?php endif; ?>

<?php //这是一段在显示后定时消失的JQ代码,已集成至Yii中.
	Yii::app()->clientScript->registerScript(
		'myHideEffect',
		'$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");',
		CClientScript::POS_READY
	);
?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>：
		<?php echo $form->textField($model,'user_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'real_name'); ?>：
		<?php echo $form->textField($model,'real_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'real_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>：
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>：
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>：
		<?php echo $form->textField($model,'phone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>：
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qq'); ?>：
		<?php echo $form->textField($model,'qq',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'qq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>：
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login_num'); ?>：
		<?php echo $form->textField($model,'login_num'); ?>
		<?php echo $form->error($model,'login_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_login_time'); ?>：
		<?php echo $form->textField($model,'last_login_time'); ?>
		<?php echo $form->error($model,'last_login_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_login_ip'); ?>：
		<?php echo $form->textField($model,'last_login_ip',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'last_login_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>：
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>：
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<button type="submit" class="btn btn-primary ml100">提交</button>

<?php $this->endWidget(); ?>

</div>