<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoanPmt
 *
 * @author zulhisham
 */
class LoanPmt extends CFormModel {

    public $totalLoan;
    public $tenure = 30;
    public $interest = 4.8;
    public $repayment = 0;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            array('totalLoan, tenure, interest', 'required'),
            array('totalLoan, tenure, interest', 'numerical'),
        );
    }

    public function attributeLabels() {
        return array(
            'totalLoan' => 'Total Loan',
            'tenure' => 'Loan Tenure',
            'interest' => 'Interest Rate',
            'repayment' => 'Monthly Repayment',
        );
    }

}