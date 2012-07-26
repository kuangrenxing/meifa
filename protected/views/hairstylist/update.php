<?php
$this->breadcrumbs=array(
	'Hairstylists'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hairstylist', 'url'=>array('index')),
	array('label'=>'Create Hairstylist', 'url'=>array('create')),
	array('label'=>'View Hairstylist', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hairstylist', 'url'=>array('admin')),
);
?>

<h1>Update Hairstylist <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>