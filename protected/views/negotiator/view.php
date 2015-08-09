<?php
$this->breadcrumbs=array(
	'Negotiators'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Negotiator','url'=>array('index')),
	array('label'=>'Create Negotiator','url'=>array('create')),
	array('label'=>'Update Negotiator','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Negotiator','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Negotiator','url'=>array('admin')),
);
?>

<h1>View Negotiator #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'phone',
		'email',
		'area',
		'note',
		'create_time',
		'update_time',
	),
)); ?>
