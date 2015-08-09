<?php
$this->breadcrumbs=array(
	'Waitinglists'=>array('index'),
	'Create',
);

?>

<h1>Waiting list Form</h1>

<?php if(Yii::app()->user->hasFlash('waitinglist')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('waitinglist'),
    )); ?>

<?php else: ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php endif; ?>