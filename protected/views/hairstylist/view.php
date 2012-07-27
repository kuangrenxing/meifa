<?php
$this->breadcrumbs=array(
	'Hairstylists'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Hairstylist', 'url'=>array('index')),
	array('label'=>'Create Hairstylist', 'url'=>array('create')),
	array('label'=>'Update Hairstylist', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hairstylist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hairstylist', 'url'=>array('admin')),
);
?>

<h1>View Hairstylist #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'sex',
		'address',
		'avatar',
		'picture',
		'motto',
		'detail',
	),
)); ?>
