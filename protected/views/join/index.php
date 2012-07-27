<?php
$this->breadcrumbs=array(
	'Joins',
);

$this->menu=array(
	array('label'=>'Create Join', 'url'=>array('create')),
	array('label'=>'Manage Join', 'url'=>array('admin')),
);
?>

<h1>Joins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
