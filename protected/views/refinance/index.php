<?php
$this->breadcrumbs=array(
	'Refinances',
);

$this->menu=array(
	array('label'=>'Create Refinance','url'=>array('create')),
	array('label'=>'Manage Refinance','url'=>array('admin')),
);
?>

<h1>Refinances</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
