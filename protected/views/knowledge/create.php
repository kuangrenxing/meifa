<?php
$this->breadcrumbs=array(
	'Knowledges'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Knowledge', 'url'=>array('index')),
	array('label'=>'Manage Knowledge', 'url'=>array('admin')),
);
?>

<h1>Create Knowledge</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>