<?php
$this->breadcrumbs=array(
	'Abouts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List About', 'url'=>array('index')),
	array('label'=>'Create About', 'url'=>array('create')),
	array('label'=>'Update About', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete About', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage About', 'url'=>array('admin')),
);
?>

<h1>View About #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
	),
)); ?>
