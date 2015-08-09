<?php
$this->breadcrumbs=array(
	'Loans'=>array('index'),
	'Create',
);

?>

<h1>Housing Loan Application Form</h1>

<?php if(Yii::app()->user->hasFlash('loan')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('loan'),
    )); ?>

<?php else: ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php endif; ?>