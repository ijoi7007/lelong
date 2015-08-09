<?php
/* @var $this LelongController */
/* @var $model Lelong */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lelong-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference_no'); ?>
		<?php echo $form->textField($model,'reference_no',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'reference_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reserve_price'); ?>
		<?php echo $form->textField($model,'reserve_price'); ?>
		<?php echo $form->error($model,'reserve_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_address'); ?>
		<?php echo $form->textArea($model,'property_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'property_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area'); ?>
		<?php echo $form->textArea($model,'area',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textArea($model,'state',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_size'); ?>
		<?php echo $form->textArea($model,'property_size',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'property_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'restriction'); ?>
		<?php echo $form->textField($model,'restriction',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'restriction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_description'); ?>
		<?php echo $form->textArea($model,'property_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'property_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_type'); ?>
		<?php echo $form->textField($model,'property_type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'property_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'auction_date'); ?>
		<?php echo $form->textField($model,'auction_date'); ?>
		<?php echo $form->error($model,'auction_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mode'); ?>
		<?php echo $form->textArea($model,'mode',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->