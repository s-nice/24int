<?php
/* @var $this AdController */
/* @var $model Ad */

$this->breadcrumbs=array(
	'Ads'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class='col-lg-12 page-title'>
	<h1 class="title pull-left">广告管理</h1>
	<div class="pull-right">
	<a class="btn btn-primary" href="<?php echo Yii::app()->controller->createUrl('create'); ?>">新增</a>
	<?php echo CHtml::link('搜索','#',array('class'=>'btn btn-primary search-button')); ?>
	</div>
</div>

<div class="col-lg-12">

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
	'adverlist'=>$adverlist,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ad-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		'id'=>array(
			'name'=>'id',
			'headerHtmlOptions' => array('width'=>'3%'),
		),
		'name',
		//'pid',
		array(
			'name'=>'pid',
			'type'=>'raw',
			'value'=>'Menu::getName($data->pid)',
		),
		//'brief',
		//'img',
		array(
			'name'=>'img',
			'type'=>'raw',
			'headerHtmlOptions' => array('width' => '10%'),
			//'htmlOptions' => array(),
			'value' => 'CHtml::link(CHtml::image("$data->img","", array("width" => "100px")),"$data->img",array("class" => "preview","rel"=>"prettyPhoto"))',
		),
		'link',
		/*
		'orderid',
		'is_show',
		'create_uid',
		'create_time',
		'update_uid',
		'update_time',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'操作',
			'headerHtmlOptions' => array('width'=>'10%'),
			'template' => ' {view} {update} {delete} ', //

			'buttons'=>array(
				'view'=>array(
					'label'=>'<span class="glyphicon glyphicon-eye-open"></span>',
					'imageUrl'=>NULL,
					'options'=>array( 'style'=>'cursor:pointer;' ), // HTML options for the button tag
					'click' => "function(){
						jQuery('#ultraModal-8').modal('show', {backdrop: 'static'});
						jQuery.ajax({
							url: $(this).attr('href'),
							success: function(response)
							{
								jQuery('#ultraModal-8 .modal-body').html(response);
							}
						});
						return false;
					}",
				),
				'update'=>array(
					'label'=>'<span class="glyphicon glyphicon-pencil"></span>',
					'imageUrl'=>NULL,
					'options'=>array( 'style'=>'cursor:pointer;' ), // HTML options for the button tag
				),
				'delete'=>array(
					'label'=>'<span class="glyphicon glyphicon-trash"></span>',
					'imageUrl'=>NULL,
					'options'=>array('style'=>'cursor:pointer;' ), // HTML options for the button tag
				),
			),
		),
	),
)); ?>

</div>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<link href="/assets/plugins/prettyphoto/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="/assets/plugins/prettyphoto/jquery.prettyPhoto.js" type="text/javascript">
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->