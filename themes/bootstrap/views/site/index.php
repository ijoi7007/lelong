<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>CHtml::encode(Yii::app()->name),
)); ?>

<p>1st Property Calculator in Malaysia</p>

<?php $this->endWidget(); ?>

<div class="fb-like-box" data-href="https://www.facebook.com/gohartanah.apps" data-width="570" data-height="220" data-show-faces="true" data-stream="false" data-show-border="false" data-header="true"></div>

<h3>Below are module ready for action :</h3>

<ul>
    <li><a href="index.php?r=kalkulator/legalfee">Legal Fee Calculator</a></li>
        <li><a href="index.php?r=kalkulator/dsr">Debt Service Ratio (DSR)</a></li>
	<li><a href="index.php?r=kalkulator/mot">Duty Stamp for MOT</a></li>
	<li><a href="index.php?r=kalkulator/tenancy">Duty Stamp For Tenancy</a></li>
	<li><a href="index.php?r=negotiator/create">Property Negotiator Application Form</a></li>
        <li><a href="index.php?r=solicitorForm/create">Request Solicitor Service Form</a></li>
</ul>

<h3>Modul under development : </h3>
<ul>
    <li>Loan Repayment</li>
    <li>Loan Qualification</li>
    <li>Over Price Calculator</li>
    <li>Maxmimum Loan Amount</li>
</ul>
