<?php
$this->breadcrumbs=array(
	'Solicitor Forms'=>array('index'),
	'Request Solicitor',
);
/*
 * hide for temprorary.
 * just to hide from client

$this->menu=array(
	array('label'=>'List Solicitor','url'=>array('index')),
	array('label'=>'Manage Solicitor','url'=>array('admin')),
);
 * 
 */
?>

<h1>Request Solicitor Form</h1>

<?php if(Yii::app()->user->hasFlash('solicitor')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('solicitor'),
    )); ?>

<?php else: ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php endif; ?>