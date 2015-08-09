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
class Pmtcashout extends CFormModel {

    public $outstanding;
    public $cashout;
    public $tenure = 30;
    public $interest = 4.8;
    public $repaymentcashout = 0;
    public $totalloan = 0;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            array('outstanding, cashout, tenure, interest', 'required'),
            array('outstanding, cashout, tenure, interest', 'numerical'),
        );
    }

    public function attributeLabels() {
        return array(
            'outstanding' => 'Loan Outstanding',
            'cashout' => 'Cash Out',
            'tenure' => 'Loan Tenure',
            'interest' => 'Interest Rate',
            'repaymentcashout' => 'Repayment Cash Out'
        );
    }
}