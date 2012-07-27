<?php
$this->breadcrumbs=array(
	'Hairproducts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Hairproducts', 'url'=>array('index')),
	array('label'=>'Create Hairproducts', 'url'=>array('create')),
	array('label'=>'Update Hairproducts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hairproducts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hairproducts', 'url'=>array('admin')),
);
?>

<h1>View Hairproducts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category',
		'name',
		'picture',
		'price',
		'detail',
	),
)); ?>
