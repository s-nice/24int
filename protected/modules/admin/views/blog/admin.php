<?php
/* @var $this BlogController */
/* @var $model Blog */

$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#blog-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class='col-lg-12 page-title'>
	<h1 class="title pull-left">博客列表</h1>
	<div class="pull-right">
	<a class="btn btn-primary" href="<?php echo Yii::app()->controller->createUrl('create'); ?>">新增</a>
	<?php echo CHtml::link('搜索','#',array('class'=>'btn btn-primary search-button')); ?>
	</div>
</div>

<div class="col-lg-12">

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
	'catelist'=>$catelist,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'blog-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		'id'=>array(
			'name'=>'id',
			'headerHtmlOptions' => array('width'=>'3%'),
		),
		//'pid',
		array(
			'name'=>'pid',
			'type'=>'raw',
			'value'=>'Category::getName($data->pid)',
		),
		'title',
		'img',
		//'create_time',
		array(
			'name'=>'create_time',
			'type'=>'raw',
			'value'=>'date("Y-m-d H:i:s",$data->create_time)',
		),
		//'brief',
		//'content',
		/*
		'source',
		'is_show',
		'orderid',
		'views',
		'create_uid',
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
