<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="content-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="rowSearch">
		<?php echo $form->label($model,'id'); ?>：
		<?php echo $form->textField($model,'id'); ?>
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
		<?php echo $form->dropDownList($model,'gender',array(1=>'男',2=>'女'),array('class'=>'input-sm')); ?>
	</div>
	
	<div class="rowSearch">
		<?php echo $form->label($model,'phone'); ?>：
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>15)); ?>
	</div>
	
	<div class="rowSearch">
		<?php echo $form->label($model,'email'); ?>：
		<?php echo $form->textField($model,'email',array('size'=>20,'maxlength'=>50)); ?>
	</div>
	
	<div class="rowSearch">
		<?php echo $form->label($model,'qq'); ?>：
		<?php echo $form->textField($model,'qq'); ?>
	</div>
	
	<div class="rowSearch">
		<?php echo $form->label($model,'status'); ?>：
		<?php echo $form->dropDownList($model,'status',array(1=>'正常',2=>'冻结'),array('class'=>'input-sm')); ?>
	</div>
	<div class="scbtn">
	<button type="submit" class="btn btn-primary ">搜索</button>
	</div>
<?php $this->endWidget(); ?>

</div>