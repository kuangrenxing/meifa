<?php
$this->breadcrumbs=array(
	'Abouts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List About', 'url'=>array('index')),
	array('label'=>'Create About', 'url'=>array('create')),
	array('label'=>'View About', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage About', 'url'=>array('admin')),
);
?>

<h1>Update About <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>