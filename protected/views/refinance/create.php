<?php
$this->breadcrumbs=array(
	'Refinances'=>array('index'),
	'Create',
);


?>

<h1>Create Refinance</h1>


<?php if(Yii::app()->user->hasFlash('refinance')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('refinance'),
    )); ?>

<?php else: ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php endif; ?>