<?php
$this->breadcrumbs=array(
	'Waitinglists'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Waitinglist','url'=>array('index')),
	array('label'=>'Create Waitinglist','url'=>array('create')),
	array('label'=>'Update Waitinglist','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Waitinglist','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Waitinglist','url'=>array('admin')),
);
?>

<h1>View Waitinglist #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'phone',
		'email',
		'proptype',
		'city',
		'target_area',
		'budget',
		'note',
		'create_time',
	),
)); ?>
