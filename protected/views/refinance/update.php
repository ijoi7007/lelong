<?php
$this->breadcrumbs=array(
	'Refinances'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Refinance','url'=>array('index')),
	array('label'=>'Create Refinance','url'=>array('create')),
	array('label'=>'View Refinance','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Refinance','url'=>array('admin')),
);
?>

<h1>Update Refinance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_formadmin',array('model'=>$model)); ?>