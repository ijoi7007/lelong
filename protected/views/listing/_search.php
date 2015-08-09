<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'type'=>'horizontal',
)); ?>

	<?php echo $form->textFieldRow($model,'listingid',array('class'=>'input-small')); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'folder',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'propcategory',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proptype',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'titletype',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'landarea',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'buildup',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'room',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'bathroom',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'address1',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'address2',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'address3',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'postcode',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'state',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'reno',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'asking',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'value',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'note',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
