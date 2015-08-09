<?php
$this->breadcrumbs=array(
	'Forsales',
);

$this->menu=array(
	array('label'=>'Create Forsale','url'=>array('create')),
	array('label'=>'Manage Forsale','url'=>array('admin')),
);
?>

<h1>Forsales</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
