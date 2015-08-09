<?php
/* @var $this LegalFeeFormController */
/* @var $model LegalFeeForm */
/* @var $form CActiveForm */
?>
<?php
/* @var $this KalkulatorController */

$this->breadcrumbs = array(
    'Kalkulator' => array('/kalkulator'),
    'Loan Qualification Calculator',
);
?>
<h1>Loan Qualification Calculator</h1>

<p>To calculate loan qualification based on current income and commitment</p>

<?php
/** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'loan-qualification-form',
    'type' => 'horizontal',
        ));
?>

<fieldset>

    <legend>Monthly Income & Commitment</legend>

    <?php echo $form->textFieldRow($model, 'totalIncome', array('class' => 'span2', 'prepend' => 'RM', 'hint' => 'total net income')); ?>
    <?php echo $form->textFieldRow($model, 'totalCommitment', array('class' => 'span2', 'prepend' => 'RM', 'hint' => 'monthly installment for loan such as housing loan, hire purchase, personal loan and etc')); ?>
    
    <legend>Loan Info</legend>   
    <?php echo $form->textFieldRow($model, 'interest', array('class' => 'span1', 'append' => '%')); ?>
    <?php echo $form->textFieldRow($model, 'tenure', array('class' => 'span1', 'append' => 'years')); ?>
    
    <legend>Result</legend>
    <?php echo $form->textFieldRow($model, 'totalLoan', array('class' => 'span2', 'prepend' => 'RM', 'disabled' => true)); ?>
    <?php echo $form->textFieldRow($model, 'repayment', array('class' => 'span2', 'prepend' => 'RM', 'disabled' => true)); ?>


</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Calculate Loan Qualification')); ?>
    <?php /* $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); */ ?>
</div>

<?php $this->endWidget(); ?>
