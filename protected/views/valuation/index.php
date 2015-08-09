<?php
$this->breadcrumbs=array(
	'Valuations',
);

$this->menu=array(
	array('label'=>'Create Valuation','url'=>array('create')),
	array('label'=>'Manage Valuation','url'=>array('admin')),
);
?>

<h1>Valuations</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
