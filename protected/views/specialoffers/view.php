<?php
$this->breadcrumbs=array(
	'Specialoffers'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Specialoffers', 'url'=>array('index')),
	array('label'=>'Create Specialoffers', 'url'=>array('create')),
	array('label'=>'Update Specialoffers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Specialoffers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Specialoffers', 'url'=>array('admin')),
);
?>

<h1>View Specialoffers #<?php echo $model->id; ?></h1>

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
