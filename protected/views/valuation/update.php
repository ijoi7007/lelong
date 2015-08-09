<?php
$this->breadcrumbs=array(
	'Valuations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Valuation','url'=>array('index')),
	array('label'=>'Create Valuation','url'=>array('create')),
	array('label'=>'View Valuation','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Valuation','url'=>array('admin')),
);
?>

<h1>Update Valuation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_formadmin',array('model'=>$model)); ?>