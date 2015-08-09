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
class CashoutForm extends CFormModel
{
	public $marketvalue;
	public $outstanding;
	public $maxcashout;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('marketvalue, outstanding', 'required'),
			//array('netMonthlyIncome', 'numerical'),
			array('marketvalue, outstanding', 'safe', 'on' => 'search'),
			
			);
	}
	
	public function attributeLabels()
	{
		return array(
			'marketvalue' => 'Market Value',
			'outstanding' => 'Outstanding Loan',
			'maxcashout' => 'Max Cash Out',
		);
	}
}
