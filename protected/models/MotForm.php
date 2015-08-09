<?php

/**
 * DSRForm class.
 * DSRForm is the data structure for keeping
 * DSR form data. It is used by the 'contact' action of 'SiteController'.
 */
class MotForm extends CFormModel
{
	public $price;
	public $level_1;
	public $level_2;
	public $level_3;
	public $totalMot;
	
	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('price', 'required'),
			//array('netMonthlyIncome', 'numerical'),
			array('price, level_1, level_2, level_3, totalMot', 'numerical'),
			
			);
	}
	
	public function attributeLabels()
	{
		return array(
			'price' => 'Purchase Price',
			'level_1' => 'First RM 100k',
			'level_2' => 'Next RM 400k',
			'level_3' => 'RM 500k Thereafter',
			'totalMot' => 'Total MOT Payable',
		);
	}
}