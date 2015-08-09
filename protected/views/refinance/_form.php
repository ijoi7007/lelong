<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'refinance-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<legend>Contact and Property Detail</legend>

<?php echo $form->textFieldRow($model, 'name', array('class' => 'span4', 'maxlength' => 250)); ?>

<?php echo $form->textFieldRow($model, 'phone', array('class' => 'span2')); ?>

<?php echo $form->textFieldRow($model, 'email', array('class' => 'span2', 'maxlength' => 50)); ?>

<?php echo $form->dropDownListRow($model, 'objective', Lookup::items('refinancetype')); ?>

<?php echo $form->textAreaRow($model, 'propinfo', array('rows' => 6, 'cols' => 50, 'class' => 'span4', 'hint' => 'Property Type, Full Address, Land Area, Build Up,<br/> 
                                                Extension & Renovation with total cost. <br/><br/>
                                                <strong>Example</strong> : 2stry teres, no 13 jln 1/M bandar baru bangi selangor
                                                26x65, bup 2100 sf, extend dapur, kitchen cabinet, plaster ceiling.
                                                kos reno 65k', 'maxlength' => 350)); ?>
<?php echo $form->textFieldRow($model, 'current_value', array('class' => 'span2', 'prepend' => 'RM', 'hint' => 'Estimation')); ?>

<?php echo $form->textFieldRow($model, 'cashout', array('class' => 'span2', 'prepend' => 'RM', 'hint' => 'Target cash out after refinance')); ?>


<legend>Loan Detail</legend>

<?php echo $form->textFieldRow($model, 'bank', array('class' => 'span3', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'outstanding', array('class' => 'span2', 'prepend' => 'RM')); ?>

<?php echo $form->textFieldRow($model, 'interest', array('class' => 'span1', 'append' => '%', 'maxlength' => 5)); ?>


<legend>Monthly Income and Commitment</legend>


<?php echo $form->textFieldRow($model, 'income', array('class' => 'span2', 'prepend' => 'RM')); ?>

<?php echo $form->textFieldRow($model, 'houseln', array('class' => 'span2', 'prepend' => 'RM', 'hint' => 'Current installment for the house to refinance')); ?>

<?php echo $form->textFieldRow($model, 'othersln', array('class' => 'span2', 'prepend' => 'RM', 'hint' => 'Total others monthly commitment such hire purchase, personal loan, others housing loan and etc')); ?>

<?php echo $form->textAreaRow($model, 'notes', array('rows' => 6, 'cols' => 50, 'class' => 'span4', 'maxlength' => 350)); ?>

<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
