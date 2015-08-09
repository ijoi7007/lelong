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

<legend>Loan Detail</legend>

<?php echo $form->textFieldRow($model, 'bank', array('class' => 'span3', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'outstanding', array('class' => 'span2', 'prepend' => 'RM', 'hint'=>'if not sure just estimate the outstanding')); ?>

<?php echo $form->textFieldRow($model, 'interest', array('class' => 'span1', 'append' => '%', 'maxlength' => 5, 'hint'=>'refer letter offer bank')); ?>


<legend>Monthly Income and Commitment</legend>


<?php echo $form->textFieldRow($model, 'income', array('class' => 'span2', 'prepend' => 'RM')); ?>

<?php echo $form->textFieldRow($model, 'houseln', array('class' => 'span2', 'prepend' => 'RM')); ?>

<?php echo $form->textFieldRow($model, 'othersln', array('class' => 'span2', 'prepend' => 'RM')); ?>

<?php echo $form->dropDownListRow($model, 'status', Lookup::items('ref_status')); ?>

<?php echo $form->dropDownListRow($model, 'banker', Lookup::items('banker'), array('prompt'=>'Choose One')); ?>

<?php echo $form->dropDownListRow($model, 'lawyer', Lookup::items('lawyer'), array('prompt'=>'Choose One')); ?>

<?php echo $form->textFieldRow($model, 'referal_fee', array('class' => 'span2', 'prepend' => 'RM')); ?>

<?php echo $form->textFieldRow($model, 'payment_date', array('class' => 'span2')); ?>



<?php echo $form->textAreaRow($model, 'notes', array('rows' => 6, 'cols' => 50, 'class' => 'span4', 'maxlength' => 350)); ?>

<?php echo $form->textAreaRow($model, 'admin_note', array('rows'=>6, 'cols'=>50, 'class'=>'span4', 'maxlength' => 250)); ?>

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
