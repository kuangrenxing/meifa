<?php
$this->breadcrumbs=array(
	'Joins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Join', 'url'=>array('index')),
	array('label'=>'Create Join', 'url'=>array('create')),
	array('label'=>'Update Join', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Join', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Join', 'url'=>array('admin')),
);
?>

<h1>View Join #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
	),
)); ?>
