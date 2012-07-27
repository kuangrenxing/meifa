<?php
$this->breadcrumbs=array(
	'Hairstyleshows'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hairstyleshow', 'url'=>array('index')),
	array('label'=>'Manage Hairstyleshow', 'url'=>array('admin')),
);
?>

<h1>Create Hairstyleshow</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>