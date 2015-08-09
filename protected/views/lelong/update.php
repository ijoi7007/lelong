<?php
/* @var $this LelongController */
/* @var $model Lelong */

$this->breadcrumbs=array(
	'Lelongs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lelong', 'url'=>array('index')),
	array('label'=>'Create Lelong', 'url'=>array('create')),
	array('label'=>'View Lelong', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Lelong', 'url'=>array('admin')),
);
?>

<h1>Update Lelong <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>