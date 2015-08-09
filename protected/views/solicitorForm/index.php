<?php
$this->breadcrumbs=array(
	'Solicitor Forms',
);

$this->menu=array(
	array('label'=>'Create Solicitor','url'=>array('create')),
	array('label'=>'Manage Solicitor','url'=>array('admin')),
);
?>

<h1>Solicitor Forms</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
