<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'type'=>'horizontal',
)); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'propinfo',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'service',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'note',array('class'=>'span5','maxlength'=>350)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
