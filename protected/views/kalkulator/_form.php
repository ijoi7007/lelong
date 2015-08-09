<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'legal-fee-form-legalfee-form',
    'type'=>'horizontal',
)); ?>

<fieldset>

<legend>Legal Fee Calculator</legend>
    
<?php echo $form->textFieldRow($model, 'price', array('input-small', 'prepend'=>'RM', 'hint'=>'Maximum Value is RM 3,000,000')); ?>
<?php echo $form->textFieldRow($model, 'legalfee', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
<?php echo $form->textFieldRow($model, 'gst', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
<?php echo $form->textFieldRow($model, 'total', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Calculate Legal Fee')); ?>
    <?php /*$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset'));*/ ?>
</div>

<?php $this->endWidget(); ?>