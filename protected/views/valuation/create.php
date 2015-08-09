<?php
$this->breadcrumbs=array(
	'Valuations'=>array('index'),
	'Create',
);

?>

<h1>Request Valuation Form</h1>

<?php if(Yii::app()->user->hasFlash('valuation')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('valuation'),
    )); ?>

<?php else: ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php endif; ?>