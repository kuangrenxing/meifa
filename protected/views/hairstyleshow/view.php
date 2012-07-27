<?php
$this->breadcrumbs=array(
	'Hairstyleshows'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Hairstyleshow', 'url'=>array('index')),
	array('label'=>'Create Hairstyleshow', 'url'=>array('create')),
	array('label'=>'Update Hairstyleshow', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hairstyleshow', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hairstyleshow', 'url'=>array('admin')),
);
?>

<h1>View Hairstyleshow #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category',
		'picture',
		'hairstylename',
		'price',
		'detail',
	),
)); ?>
