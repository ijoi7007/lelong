<?php
/* @var $this MotFormController */
/* @var $model MotForm */
/* @var $form CActiveForm */
?>

<?php
/* @var $this KalkulatorController */

$this->breadcrumbs=array(
	'Kalkulator'=>array('/kalkulator'),
	'Max Cash Out',
);
?>
<h1>Max Cash Out Calculator</h1>


<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'cashout-form',
    'type'=>'horizontal',
)); ?>

<fieldset>

<legend>Max Cash Out</legend>
<?php echo $form->textFieldRow($model, 'marketvalue', array('input-small', 'prepend'=>'RM')); ?>
<?php echo $form->textFieldRow($model, 'outstanding', array('input-small', 'prepend'=>'RM')); ?>
<?php echo $form->textFieldRow($model, 'maxcashout', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','id'=>'submit-btn', 'label'=>'Calculate')); ?>
    <?php /*$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset'));*/ ?>
</div>

<?php $this->endWidget(); ?>