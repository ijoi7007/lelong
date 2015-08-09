<?php
$this->breadcrumbs = array(
    'For Sale' => array('index'),
    'Create',
);
?>

<h1>Property For Sale Form</h1>

<?php if (Yii::app()->user->hasFlash('forsale')): ?>

    <?php
    $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts' => array('forsale'),
    ));
    ?>

<?php else: ?>

    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>

<?php endif; ?>