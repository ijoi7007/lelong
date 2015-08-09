<?php
/* @var $this LelongController */
/* @var $model Lelong */

$this->breadcrumbs=array(
	'Lelongs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lelong', 'url'=>array('index')),
	array('label'=>'Manage Lelong', 'url'=>array('admin')),
);
?>

<h1>Create Lelong</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>