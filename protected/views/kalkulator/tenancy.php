<?php
/* @var $this MotFormController */
/* @var $model MotForm */
/* @var $form CActiveForm */
?>

<?php
/* @var $this KalkulatorController */

$this->breadcrumbs=array(
	'Kalkulator'=>array('/kalkulator'),
	'Stamp Duty Tenancy Agreement',
);
?>
<h1>Stamp Duty Tenancy Agreement Calculator</h1>


<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'tenancy-form',
    'type'=>'horizontal',
)); ?>

<fieldset>

<legend>Monthly Income</legend>
<?php echo $form->textFieldRow($model, 'monthlyRent', array('input-small', 'prepend'=>'RM')); ?>
<?php echo $form->dropDownListRow($model, 'agreementPeriod', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4'),  array('empty' => 'Number of Year(s)')); ?>
<?php echo $form->textFieldRow($model, 'annualyRent', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
<?php echo $form->textFieldRow($model, 'totalStampDuty', array('input-small', 'prepend'=>'RM','disabled'=>true)); ?>
</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','id'=>'submit-btn', 'label'=>'Calculate Stamp Duty')); ?>
    <?php /*$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset'));*/ ?>
</div>

<?php $this->endWidget(); ?>


<?php
/*Yii::app()->clientScript->registerScript(
        'my-welcome-grettings',

         "$(function() {
    		$("#tenancy-form").submit(function() {
        	alert("hi");
        	//do whatever 
   			 });
		});""
      );
//See more at: https://arjunphp.com/yii-tutorial-add-javascript-views/#sthash.6uQey132.dpuf

*/


Yii::app()->clientScript->registerScript('register_script_name', "
    $('#submit-btn').click(function(){
       alert('edit');
       //return false;
    });
", CClientScript::POS_READY);
?>