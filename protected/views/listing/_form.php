<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'listing-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span4','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'email',array('maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'folder',array('maxlength'=>50)); ?>

	<?php echo $form->dropDownListRow($model,'propcategory', Lookup::items('propcat')); ?>

	<?php echo $form->dropDownListRow($model,'proptype', Lookup::items('proptype')); ?>

	<?php echo $form->dropDownListRow($model,'titletype', Lookup::items('titletype')); ?>

	<?php echo $form->textFieldRow($model,'landarea',array('append'=>'sq. ft.','class'=>'input-small', 'maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'buildup',array('append'=>'sq. ft.','class'=>'input-small','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'room',array('class'=>'input-small','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'bathroom',array('class'=>'input-small','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'address1',array('class'=>'span4','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'address2',array('class'=>'span4','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'address3',array('maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'postcode',array('class'=>'input-small')); ?>

	<?php echo $form->dropDownListRow($model,'state', Lookup::items('state'));  ?>

	<?php echo $form->textAreaRow($model,'reno',array('rows'=>6, 'cols'=>50, 'class'=>'span5', 'maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'asking',array('class'=>'input-small', 'prepend'=>'RM')); ?>

	<?php echo $form->textFieldRow($model,'value',array('class'=>'input-small', 'prepend'=>'RM')); ?>

	<?php echo $form->textAreaRow($model,'note',array('rows'=>6, 'cols'=>50, 'class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'status', Lookup::items('status')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
