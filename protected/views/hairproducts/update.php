<?php
$this->breadcrumbs=array(
	'Hairproducts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hairproducts', 'url'=>array('index')),
	array('label'=>'Create Hairproducts', 'url'=>array('create')),
	array('label'=>'View Hairproducts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hairproducts', 'url'=>array('admin')),
);
?>

<h1>Update Hairproducts <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>