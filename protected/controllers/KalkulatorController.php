<?php

class KalkulatorController extends Controller {

    public function actionRepaymentCashout() {

        $model = new Pmtcashout;
        if (isset($_POST['Pmtcashout'])) {
            $model->attributes = $_POST['Pmtcashout'];
            if ($model->validate()) {

                $model->totalloan = $model->outstanding + $model->cashout;

                $calc = new Financial;
                //PMT(0.048 / 12, 360, -150000)
                //pmt(interest/100/12, tenure*12, totalLoan
                $model->repaymentcashout = number_format($calc->PMT(($model->interest / 100 / 12), $model->tenure * 12, $model->totalloan * (-1)));
                //$this->render('dsr',array('model'=>$model));
                //$this->render('repayment', array('model' => $model));

                //$model->repaymentcashout = $model->totalloan;
            }
        }
        $this->render('repaymentCashout', array('model' => $model));
    }

    public function actionMaxcashout() {

        $model = new CashoutForm;
        if (isset($_POST['CashoutForm'])) {
            $model->attributes = $_POST['CashoutForm'];
            if ($model->validate()) {
                
                $model->maxcashout = $model->marketvalue * 0.9 - $model->outstanding;
    
            }
        }
        $this->render('maxcashout', array('model' => $model));
    }

    public function actionTenancy() {

        $model = new TenancyForm;
        if (isset($_POST['TenancyForm'])) {
            $model->attributes = $_POST['TenancyForm'];
            if ($model->validate()) {
                $model->annualyRent = $model->monthlyRent * 12;

                if ($model->agreementPeriod == '1') {
                    $model->totalStampDuty = (($model->annualyRent - 2400) / 250) * 1;
                } else
                if ($model->agreementPeriod == '2' || $model->agreementPeriod == '3') {
                    $model->totalStampDuty = (($model->annualyRent - 2400) / 250) * 2;
                } else
                if ($model->agreementPeriod == '4') {
                    $model->totalStampDuty = (($model->annualyRent - 2400) / 250) * 4;
                }
            }
        }
        $this->render('tenancy', array('model' => $model));
    }

    public function actionMot() {
        $model = new MotForm;
        if (isset($_POST['MotForm'])) {
            $model->attributes = $_POST['MotForm'];
            if ($model->validate()) {
                if ($model->price <= 100000) {
                    $model->level_1 = $model->price * 0.01;
                    $model->level_2 = 0;
                    $model->level_3 = 0;
                    $model->totalMot = $model->level_1 + $model->level_2 + $model->level_3;
                } else if ($model->price <= 500000) {
                    $model->level_1 = 1000;
                    $model->level_2 = ($model->price - 100000) * 0.02;
                    $model->level_3 = 0;
                    $model->totalMot = $model->level_1 + $model->level_2 + $model->level_3;
                } else {
                    $model->level_1 = 1000;
                    $model->level_2 = 8000;
                    ;
                    $model->level_3 = ($model->price - 500000) * 0.03;
                    $model->totalMot = $model->level_1 + $model->level_2 + $model->level_3;
                }
            }
        }

        $this->render('mot', array('model' => $model));
    }

    public function actionLegalfee() {
        $model = new LegalFeeForm;
        if (isset($_POST['LegalFeeForm'])) {
            $model->attributes = $_POST['LegalFeeForm'];
            if ($model->validate()) {
                if ($model->price <= 150000)
                    $model->legalfee = $model->price * 0.01;
                else if ($model->price <= 1000000) {
                    /*
                     * 150k - RM 1500
                     * total - RM 1500
                     */
                    $model->legalfee = (($model->price - 150000) * 0.007) + 1500;
                } else if ($model->price <= 3000000) {
                    /*
                     * 150k - RM 1500
                     * next 850k - RM 7450
                     * total - RM 7450
                     */

                    $model->legalfee = (($model->price - 1000000) * 0.006) + 7450;
                }
                //$model->legalfee = this->calculateLegalFee();

                $model->gst = $model->legalfee * 0.06;
                $model->total = $model->legalfee + $model->gst;

                //$this->redirect(array('legalfee','model'=>$model));
                //$this->render('legalfee',array('model'=>$model));
            }
        }
        $this->render('legalfee', array('model' => $model));
    }

    public function actionAgentfee() {
        $model = new AgentFeeForm;
        if (isset($_POST['AgentFeeForm'])) {
            $model->attributes = $_POST['AgentFeeForm'];
            if ($model->validate()) {

                $model->agentfee = $model->price * 0.03;
                $model->gst = $model->agentfee * 0.06;
                $model->total = $model->agentfee + $model->gst;

                //$this->redirect(array('legalfee','model'=>$model));
                //$this->render('legalfee',array('model'=>$model));
            }
        }
        $this->render('agentfee', array('model' => $model));
    }

    public function actionDsr() {
        $model = new DsrForm;
        if (isset($_POST['DsrForm'])) {
            $model->attributes = $_POST['DsrForm'];
            if ($model->validate()) {
                $model->totalIncome = $model->netMonthlyIncome + $model->otherIncome;
                $model->totalCommitment = $model->newInstallment + $model->housingLoan + $model->personalLoan + $model->hirePurchaseLoan + $model->otherCommitment;
                $model->dsr = $model->totalCommitment / $model->totalIncome * 100;

                //$this->render('dsr',array('model'=>$model));
            }
        }
        $this->render('dsr', array('model' => $model));
    }

    public function actionRepayment() {
        $model = new LoanPmt;
        if (isset($_POST['LoanPmt'])) {
            $model->attributes = $_POST['LoanPmt'];
            if ($model->validate()) {
                $calc = new Financial;
                //PMT(0.048 / 12, 360, -150000)
                //pmt(interest/100/12, tenure*12, totalLoan
                $model->repayment = number_format($calc->PMT(($model->interest / 100 / 12), $model->tenure * 12, $model->totalLoan * (-1)));
                //$this->render('dsr',array('model'=>$model));
            }
        }
        $this->render('repayment', array('model' => $model));
    }
    
    public function actionQualification() {
        $model = new LoanQualification;
        if (isset($_POST['LoanQualification'])) {
            $model->attributes = $_POST['LoanQualification'];
            if ($model->validate()) {
                $calc = new Financial;
                // to calculate maximum monthly repayment
                $model->repayment = ($model->totalIncome * 0.7) - $model->totalCommitment;
                
                // to calculate maximum loan amount
                $model->totalLoan = number_format($calc->PV(($model->interest / 100 / 12), $model->tenure * 12, $model->repayment * (-1)));
                
                //PMT(0.048 / 12, 360, -150000)
                //pmt(interest/100/12, tenure*12, totalLoan
                //$model->repayment = number_format($calc->PMT(($model->interest / 100 / 12), $model->tenure * 12, $model->totalLoan * (-1)));
                //$this->render('dsr',array('model'=>$model));
            }
        }
        $this->render('qualification', array('model' => $model));
    }
}