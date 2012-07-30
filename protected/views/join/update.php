<?php
$this->breadcrumbs=array(
	'Joins'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Join', 'url'=>array('index')),
	array('label'=>'Create Join', 'url'=>array('create')),
	array('label'=>'View Join', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Join', 'url'=>array('admin')),
);
?>

<h1>Update Join <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>