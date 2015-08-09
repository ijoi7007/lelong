<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'forsale-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'name', array('class' => 'span4', 'maxlength' => 250)); ?>

<?php echo $form->textFieldRow($model, 'phone', array('class' => 'span2')); ?>

<?php echo $form->textFieldRow($model, 'email', array('class' => 'span3', 'maxlength' => 50)); ?>

<?php echo $form->textAreaRow($model, 'propinfo', array('rows' => 4, 'cols' => 50, 'class' => 'span4', 'hint' => 'Property Type, Full Address, Land Area, Build Up,<br/> 
                                                <br/>
                                                <strong>Example</strong> : 2stry teres, no 13 jln 1/M bandar baru bangi selangor
                                                26x65, bup 2100 sf', 'maxlength' => 350)); ?>

<?php echo $form->textAreaRow($model, 'renoinfo', array('rows' => 3, 'cols' => 50, 'class' => 'span4', 'hint' => 'Extension & Renovation detail with total cost. <br/><br/>
                                                <strong>Example</strong> : extend dapur, kitchen cabinet, plaster ceiling, car porch tiles, auto gate.
                                                kos reno 65k', 'maxlength' => 250)); ?>

<?php echo $form->textFieldRow($model, 'value', array('class' => 'span2', 'prepend' => 'RM')); ?>

<?php echo $form->textFieldRow($model, 'price', array('class' => 'span2', 'prepend' => 'RM')); ?>

<?php echo $form->textAreaRow($model, 'note', array('rows' => 6, 'cols' => 50, 'class' => 'span4', 'maxlength' => 250)); ?>

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
