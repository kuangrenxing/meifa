<?php
$this->breadcrumbs=array(
	'Specialoffers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Specialoffers', 'url'=>array('index')),
	array('label'=>'Manage Specialoffers', 'url'=>array('admin')),
);
?>

<h1>Create Specialoffers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>