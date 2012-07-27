<?php
$this->breadcrumbs=array(
	'Knowledges',
);

$this->menu=array(
	array('label'=>'Create Knowledge', 'url'=>array('create')),
	array('label'=>'Manage Knowledge', 'url'=>array('admin')),
);
?>

<h1>Knowledges</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
