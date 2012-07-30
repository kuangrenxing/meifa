<?php
$this->breadcrumbs=array(
	'Abouts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List About', 'url'=>array('index')),
	array('label'=>'Manage About', 'url'=>array('admin')),
);
?>

<h1>Create About</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>