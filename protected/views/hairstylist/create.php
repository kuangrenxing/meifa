<?php
$this->breadcrumbs=array(
	'Hairstylists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hairstylist', 'url'=>array('index')),
	array('label'=>'Manage Hairstylist', 'url'=>array('admin')),
);
?>

<h1>Create Hairstylist</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>