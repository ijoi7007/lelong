<?php
/* @var $this KalkulatorController */

$this->breadcrumbs=array(
	'Kalkulator',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'legal-fee-form',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->textFieldRow($model,'textField', array('class'=>'input-small')); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Calculate')); ?>
 
<?php $this->endWidget(); ?>
