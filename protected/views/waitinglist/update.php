<?php
$this->breadcrumbs=array(
	'Waitinglists'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Waitinglist','url'=>array('index')),
	array('label'=>'Create Waitinglist','url'=>array('create')),
	array('label'=>'View Waitinglist','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Waitinglist','url'=>array('admin')),
);
?>

<h1>Update Waitinglist <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>