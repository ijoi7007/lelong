<?php
$this->breadcrumbs=array(
	'Negotiators'=>array('index'),
	'Create',
);

?>

<h1>Property Negotiator Form</h1>

<?php if(Yii::app()->user->hasFlash('negotiator')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('negotiator'),
    )); ?>

<?php else: ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php endif; ?>