<?php
$this->breadcrumbs=array(
	'Hairstyleshows'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hairstyleshow', 'url'=>array('index')),
	array('label'=>'Create Hairstyleshow', 'url'=>array('create')),
	array('label'=>'View Hairstyleshow', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hairstyleshow', 'url'=>array('admin')),
);
?>

<h1>Update Hairstyleshow <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>