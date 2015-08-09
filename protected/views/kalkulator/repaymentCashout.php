<?php
/* @var $this LegalFeeFormController */
/* @var $model LegalFeeForm */
/* @var $form CActiveForm */
?>
<?php
/* @var $this KalkulatorController */

$this->breadcrumbs=array(
	'Kalkulator'=>array('/kalkulator'),
	'Loan Repayment Cash Out Calculator',
);

?>
<h1>Loan Repayment Cash Out Calculator</h1>

<p>To calculate monthly repayment</p>

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'loan-repayment-cashout-form',
    'type'=>'horizontal',
)); ?>

<fieldset>

<legend>Loan Repayment Cash Out Calculator</legend>
    
<?php echo $form->textFieldRow($model, 'outstanding', array('class' => 'span2', 'prepend'=>'RM')); ?>
<?php echo $form->textFieldRow($model, 'cashout', array('class' => 'span2', 'prepend'=>'RM')); ?>
<?php echo $form->textFieldRow($model, 'interest', array('class' => 'span1', 'append'=>'%')); ?>
<?php echo $form->textFieldRow($model, 'tenure', array('class' => 'span1', 'append'=>'years')); ?>
<?php echo $form->textFieldRow($model, 'repaymentcashout', array('class' => 'span2', 'prepend'=>'RM','disabled'=>true)); ?>
</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Calculate Monthly Repayment')); ?>
    <?php /*$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset'));*/ ?>
</div>

<?php $this->endWidget(); ?>
