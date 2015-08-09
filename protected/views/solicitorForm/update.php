<?php
$this->breadcrumbs=array(
	'Solicitor Forms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Solicitor','url'=>array('index')),
	array('label'=>'Create Solicitor','url'=>array('create')),
	array('label'=>'View Solicitor','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Solicitor','url'=>array('admin')),
);
?>

<h1>Update Solicitor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>