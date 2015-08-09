<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tenancyForm
 *
 * @author zulhisham
 */
class TenancyForm extends CFormModel
{
	public $monthlyRent;
	public $annualyRent;
	public $agreementPeriod;
	public $totalStampDuty;
	
	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('monthlyRent, agreementPeriod', 'required'),
			//array('netMonthlyIncome', 'numerical'),
			array('monthlyRent, annualyRent, agreementPeriod, totalStampDuty', 'numerical'),
			
			);
	}
	
	public function attributeLabels()
	{
		return array(
			'monthlyRent' => 'Rental For 1 Month',
			'agreementPeriod' => 'Rental Period',
			'annualyRent' => 'Rental 1 Year',
			'totalStampDuty' => 'Total Stamp Duty',
		);
	}
}
