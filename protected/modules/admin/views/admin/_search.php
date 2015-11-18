<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
?>

<div class="content-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="rowSearch">
		<?php echo $form->label($model,'id'); ?>：
		<?php echo $form->textField($model,'id',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'user_name'); ?>：
		<?php echo $form->textField($model,'user_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'real_name'); ?>：
		<?php echo $form->textField($model,'real_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'gender'); ?>：
		<?php echo $form->textField($model,'gender'); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'phone'); ?>：
		<?php echo $form->textField($model,'phone',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'email'); ?>：
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'qq'); ?>：
		<?php echo $form->textField($model,'qq',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'status'); ?>：
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'login_num'); ?>：
		<?php echo $form->textField($model,'login_num'); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'last_login_time'); ?>：
		<?php echo $form->textField($model,'last_login_time'); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'last_login_ip'); ?>：
		<?php echo $form->textField($model,'last_login_ip',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'create_time'); ?>：
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="rowSearch">
		<?php echo $form->label($model,'update_time'); ?>：
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

<div style="clear: both;text-align: center">
	<button type="submit" class="btn btn-primary">搜索</button>
</div>
<?php $this->endWidget(); ?>

</div>