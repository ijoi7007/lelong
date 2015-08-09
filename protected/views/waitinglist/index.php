<?php
$this->breadcrumbs=array(
	'Waitinglists',
);

$this->menu=array(
	array('label'=>'Create Waitinglist','url'=>array('create')),
	array('label'=>'Manage Waitinglist','url'=>array('admin')),
);
?>

<h1>Waitinglists</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
