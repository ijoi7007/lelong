<?php
$this->breadcrumbs=array(
	'Negotiators',
);

$this->menu=array(
	array('label'=>'Create Negotiator','url'=>array('create')),
	array('label'=>'Manage Negotiator','url'=>array('admin')),
);
?>

<h1>Negotiators</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
