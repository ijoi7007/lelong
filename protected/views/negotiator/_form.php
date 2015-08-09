<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'negotiator-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span4','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span2','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span3','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'area',array('class'=>'span3','maxlength'=>50)); ?>
        
	<?php echo $form->textAreaRow($model,'note',array('rows'=>6, 'cols'=>50, 'class'=>'span4', 'maxlength'=>350)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
