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
class LoanQualification extends CFormModel {

    public $totalLoan = 0;
    public $tenure = 30;
    public $interest = 4.8;
    public $repayment = 0;
    public $totalIncome = 0;
    public $totalCommitment = 0;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            array('totalIncome, totalCommitment, tenure, interest', 'required'),
            array('tenure, interest', 'numerical'),
        );
    }

    public function attributeLabels() {
        return array(
            'totalLoan' => 'Maximum Qualification',
            'tenure' => 'Loan Tenure',
            'interest' => 'Interest Rate',
            'repayment' => 'Maximum Repayment',
        );
    }

}