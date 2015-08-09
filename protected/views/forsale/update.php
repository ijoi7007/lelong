<?php
$this->breadcrumbs=array(
	'Forsales'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Forsale','url'=>array('index')),
	array('label'=>'Create Forsale','url'=>array('create')),
	array('label'=>'View Forsale','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Forsale','url'=>array('admin')),
);
?>

<h1>Update Forsale <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_formadmin',array('model'=>$model)); ?>