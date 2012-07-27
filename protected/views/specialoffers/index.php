<?php
$this->breadcrumbs=array(
	'Specialoffers',
);

$this->menu=array(
	array('label'=>'Create Specialoffers', 'url'=>array('create')),
	array('label'=>'Manage Specialoffers', 'url'=>array('admin')),
);
?>

<h1>Specialoffers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
