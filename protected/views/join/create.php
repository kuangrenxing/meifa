<?php
$this->breadcrumbs=array(
	'Joins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Join', 'url'=>array('index')),
	array('label'=>'Manage Join', 'url'=>array('admin')),
);
?>

<h1>Create Join</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>