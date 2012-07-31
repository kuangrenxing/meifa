<?php
$this->breadcrumbs=array(
	'Hairproducts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hairproducts', 'url'=>array('index')),
	array('label'=>'Manage Hairproducts', 'url'=>array('admin')),
);
?>

<h1>Create Hairproducts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>