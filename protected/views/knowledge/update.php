<?php
$this->breadcrumbs=array(
	'Knowledges'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Knowledge', 'url'=>array('index')),
	array('label'=>'Create Knowledge', 'url'=>array('create')),
	array('label'=>'View Knowledge', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Knowledge', 'url'=>array('admin')),
);
?>

<h1>Update Knowledge <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>