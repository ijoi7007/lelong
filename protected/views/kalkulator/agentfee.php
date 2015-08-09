<?php
/* @var $this LegalFeeFormController */
/* @var $model LegalFeeForm */
/* @var $form CActiveForm */
?>
<?php
/* @var $this KalkulatorController */

$this->breadcrumbs=array(
	'Kalkulator'=>array('/kalkulator'),
	'Estate Agent Fee Calculator',
);

?>
<h1>Estate Agent Fee Calculator</h1>

<p>To calculate professional fee for estate agent</p>

<p>Need estate agent to sell your property?? Fill up <a href="index.php?r=forsale/create"> For Sale Form</a> now !!</p>

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'agent-fee-form',
    'type'=>'horizontal',
)); ?>

<fieldset>

<legend>Estate Agent Fee Calculator</legend>
    
<?php echo $form->textFieldRow($model, 'price', array('input-small', 'prepend'=>'RM')); ?>
<?php echo $form->textFieldRow($model, 'agentfee', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
<?php echo $form->textFieldRow($model, 'gst', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
<?php echo $form->textFieldRow($model, 'total', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Calculate Estate Agent Fee')); ?>
    <?php /*$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset'));*/ ?>
</div>

<?php $this->endWidget(); ?>
