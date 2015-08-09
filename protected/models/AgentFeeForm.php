<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class AgentFeeForm extends CFormModel
{
	public $price;
	public $agentfee;
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
			array('price, agentfee, gst, total', 'numerical', 'integerOnly'=>true),
			);
	}
	
	public function attributeLabels()
	{
		return array(
                        'price' => 'Selling Price',
			'agentfee' => 'Estate Agent Fee',
			'gst' => 'Goverment Tax',
			'total' => 'Total Payable',
		);
	}
}