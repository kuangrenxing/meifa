<?php
$this->breadcrumbs=array(
	'Careers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Careers', 'url'=>array('index')),
	array('label'=>'Create Careers', 'url'=>array('create')),
	array('label'=>'Update Careers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Careers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Careers', 'url'=>array('admin')),
);
?>

<h1>View Careers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'position',
		'job',
		'requirement',
		'detail',
		'create_time',
		'update_time',
	),
)); ?>
