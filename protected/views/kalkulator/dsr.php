<?php
/* @var $this KalkulatorController */

$this->breadcrumbs=array(
	'Kalkulator'=>array('/kalkulator'),
	'Debt Service Ratio (DSR)',
);
?>
<h1>Debt Service Ratio (DSR) Calculator</h1>

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'dsr-form',
    'type'=>'horizontal',
)); ?>

<fieldset>

<legend>Monthly Income</legend>
<?php echo $form->textFieldRow($model, 'netMonthlyIncome', array('input-small', 'prepend'=>'RM')); ?>
<?php echo $form->textFieldRow($model, 'otherIncome', array('input-small', 'prepend'=>'RM')); ?>

<legend>Monthly Commitment</legend>
<?php echo $form->textFieldRow($model, 'newInstallment', array('input-small', 'prepend'=>'RM')); ?>
<?php echo $form->textFieldRow($model, 'housingLoan', array('input-small', 'prepend'=>'RM')); ?>
<?php echo $form->textFieldRow($model, 'personalLoan', array('input-small', 'prepend'=>'RM')); ?>
<?php echo $form->textFieldRow($model, 'otherCommitment', array('input-small', 'prepend'=>'RM')); ?>

<legend>Total</legend>
<?php echo $form->textFieldRow($model, 'totalIncome', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
<?php echo $form->textFieldRow($model, 'totalCommitment', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
<?php echo $form->textFieldRow($model, 'dsr', array('input-small', 'append'=>'%','disabled'=>true)); ?>
</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Calculate DSR')); ?>
    <?php /*$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset'));*/ ?>
</div>

<?php $this->endWidget(); ?>