<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class LegalFeeForm extends CFormModel
{
	public $price;
	public $legalfee;
	public $gst;
	public $total;	
	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('price', 'required'),
			array('price, legalfee, gst, total', 'numerical', 'integerOnly'=>true),
			);
	}
	
	public function attributeLabels()
	{
		return array(
                        'price' => 'Purchase Price',
			'legalfee' => 'Legal Fee Payable',
			'gst' => 'Goverment Tax',
			'total' => 'Total Payable',
		);
	}
}