<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'waitinglist-form',
	'enableAjaxValidation'=>false,
    'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span4','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span2')); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span3','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'proptype',array('class'=>'span3', 'hint'=>'eg : 1 @ 2 : Stry Terrace, Semi D, Bungalow' ,'maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span3', 'hint'=>'eg : Bandar Baru Bangi, Shah Alam, Kajang','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'target_area',array('class'=>'span3', 'hint'=>'eg : Seksyen 7, Taman Kajang Impian, Jalan ..','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'budget',array('class'=>'span2', 'prepend'=>'RM')); ?>
        
        <?php echo $form->textAreaRow($model,'note',array('rows'=>5, 'cols'=>40, 'class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
