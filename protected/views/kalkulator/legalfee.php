<?php
/* @var $this LegalFeeFormController */
/* @var $model LegalFeeForm */
/* @var $form CActiveForm */
?>
<?php
/* @var $this KalkulatorController */

$this->breadcrumbs=array(
	'Kalkulator'=>array('/kalkulator'),
	'Legal Fee Calculator',
);

?>
<h1>Legal Fee Calculator</h1>
<p>Kalkulator bagi mengira bayaran guaman bagi Perjanjian Jual-Beli Rumah (SPA) </p>

<p>Kalkulator ini tidak termasuk disbursement.</p>

<p>Sekiranya anda perlukan lawyer bagi urusan jual-beli, loan agreement, wasiat, harta pusaka dan sebagainya
    layari <a href="index.php?r=solicitorForm/create">Solicitor Form</a></p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
