<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'solicitor-form-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span3','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span3','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span3','maxlength'=>50)); ?>

	<?php echo $form->textAreaRow($model, 'propinfo', array('rows' => 6, 'cols' => 50, 'class' => 'span4', 'hint' => 'Property Type, Full Address, Land Area.<br/><br/>
                                                <strong>Example</strong> : 2stry teres, no 13 jln 1/M bandar baru bangi selangor
                                                26x65.', 'maxlength' => 350)); ?>

	<?php echo $form->dropDownListRow($model,'service', Lookup::items('solicitor_type'), array('class'=>'span3')); ?>
        
        <?php echo $form->textFieldRow($model,'price', array('class'=>'span2', 'prepend'=>'RM', 'hint'=>'For SPA and Loan Agreement')); ?>
        
        <?php echo $form->textAreaRow($model,'note',array('rows'=>6, 'cols'=>50, 'class'=>'span4', 'maxlength'=>350)); ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
