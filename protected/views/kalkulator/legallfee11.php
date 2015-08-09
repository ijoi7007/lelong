<?php
/* @var $this KalkulatorController */

$this->breadcrumbs=array(
	'Kalkulator'=>array('/kalkulator'),
	'Legallfee',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'legalfee-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Calculate Legal Fee'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->