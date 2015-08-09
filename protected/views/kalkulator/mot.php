<?php
/* @var $this MotFormController */
/* @var $model MotForm */
/* @var $form CActiveForm */
?>

<?php
/* @var $this KalkulatorController */

$this->breadcrumbs=array(
	'Kalkulator'=>array('/kalkulator'),
	'Stamp Duty Memorendum of Tranfer (MOT)',
);
?>
<h1>Stamp Duty MOT Calculator</h1>


<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'mot-form-mot-form',
    'type'=>'horizontal',
)); ?>

<ul>
    <li>test 1</li>
    <li>test 1</li>
    <li>test 1</li>
    <li>test 1</li>
</ul>
<fieldset>

<legend>MOT Calculator</legend>
<?php echo $form->textFieldRow($model, 'price', array('input-small', 'prepend'=>'RM')); ?>
<?php echo $form->textFieldRow($model, 'level_1', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
<?php echo $form->textFieldRow($model, 'level_2', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
<?php echo $form->textFieldRow($model, 'level_3', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
<?php echo $form->textFieldRow($model, 'totalMot', array('input-small','prepend'=>'RM','disabled'=>true)); ?>
</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Calculate DSR')); ?>
    <?php /*$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset'));*/ ?>
</div>

<?php $this->endWidget(); ?>