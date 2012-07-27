<?php
$this->breadcrumbs=array(
	'Knowledges'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Knowledge', 'url'=>array('index')),
	array('label'=>'Create Knowledge', 'url'=>array('create')),
	array('label'=>'Update Knowledge', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Knowledge', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Knowledge', 'url'=>array('admin')),
);
?>

<h1>View Knowledge #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'create_time',
		'update_time',
	),
)); ?>
