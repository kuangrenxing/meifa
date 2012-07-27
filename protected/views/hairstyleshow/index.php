<?php
$this->breadcrumbs=array(
	'Hairstyleshows',
);

$this->menu=array(
	array('label'=>'Create Hairstyleshow', 'url'=>array('create')),
	array('label'=>'Manage Hairstyleshow', 'url'=>array('admin')),
);
?>

<h1>Hairstyleshows</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
