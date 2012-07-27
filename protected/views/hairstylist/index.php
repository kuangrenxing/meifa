<?php
$this->breadcrumbs=array(
	'Hairstylists',
);

$this->menu=array(
	array('label'=>'Create Hairstylist', 'url'=>array('create')),
	array('label'=>'Manage Hairstylist', 'url'=>array('admin')),
);
?>

<h1>Hairstylists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
