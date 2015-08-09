<?php

/**
 * DSRForm class.
 * DSRForm is the data structure for keeping
 * DSR form data. It is used by the 'contact' action of 'SiteController'.
 */
class DsrForm extends CFormModel
{
	public $netMonthlyIncome;
	public $otherIncome;
	public $totalIncome;
	public $newInstallment;
	public $housingLoan;
	public $personalLoan;
	public $hirePurchaseLoan;
	public $otherCommitment;
	public $totalCommitment;
	public $dsr;
	
	
	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('netMonthlyIncome', 'required'),
			//array('netMonthlyIncome', 'numerical'),
			array('netMonthlyIncome, otherIncome, totalIncome, newInstallment, housingLoan, personalLoan, 
			hirePurchaseLoan, otherCommitment, totalCommitment, dsr', 'numerical'),
			
			);
	}
	
	public function attributeLabels()
	{
		return array(
			'netMonthlyIncome' => 'Net Income',
			'otherIncome' => 'Other Income',
			'totalIncome' => 'Total Income',
			'newInstallment' => 'New Installment',
			'housingLoan' => 'Housing Loan',
			'personalLoan' => 'Personal Loan',
			'hirePurchaseLoan' => 'Hire Purchase Loan',
			'OtherCommitment' => 'Other Commitment',
			'totalCommitment' => 'Total Commitment',
			'dsr' => 'Debt Service Ratio (DSR)',
		);
	}
}