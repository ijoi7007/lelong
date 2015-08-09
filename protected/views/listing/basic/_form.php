<div class="form">
	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'listing-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folder'); ?>
		<?php echo $form->textField($model,'folder',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'folder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propcategory'); ?>
		<?php echo $form->dropDownList($model,'propcategory',Lookup::items('propcat')); ?>
		<?php echo $form->error($model,'propcategory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proptype'); ?>
		<?php echo $form->dropDownList($model,'proptype',Lookup::items('proptype')); ?>
		<?php echo $form->error($model,'proptype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titletype'); ?>
		<?php echo $form->dropDownList($model,'titletype',Lookup::items('titletype')); ?>
		<?php echo $form->error($model,'titletype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'landarea'); ?>
		<?php echo $form->textField($model,'landarea',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'landarea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buildup'); ?>
		<?php echo $form->textField($model,'buildup',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'buildup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room'); ?>
		<?php echo $form->textField($model,'room',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'room'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bathroom'); ?>
		<?php echo $form->textField($model,'bathroom',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'bathroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address1'); ?>
		<?php echo $form->textField($model,'address1',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address2'); ?>
		<?php echo $form->textField($model,'address2',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address3'); ?>
		<?php echo $form->textField($model,'address3'); ?>
		<?php echo $form->error($model,'address3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode'); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->dropDownList($model,'state',Lookup::items('state')); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reno'); ?>
		<?php echo $form->textArea($model,'reno',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asking'); ?>
		<?php echo $form->textField($model,'asking'); ?>
		<?php echo $form->error($model,'asking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value'); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',Lookup::items('status')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->