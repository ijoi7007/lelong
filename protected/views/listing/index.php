<?php
$this->breadcrumbs=array(
	'Listings',
);

$this->menu=array(
	array('label'=>'Create Listing','url'=>array('create')),
	array('label'=>'Manage Listing','url'=>array('admin')),
);
?>

<h1>Listings</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
