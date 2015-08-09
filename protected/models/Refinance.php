<?php

/**
 * This is the model class for table "{{refinance}}".
 *
 * The followings are the available columns in table '{{refinance}}':
 * @property integer $id
 * @property string $name
 * @property integer $phone
 * @property string $email
 * @property integer $objective
 * @property string $propinfo
 * @property string $bank
 * @property integer $outstanding
 * @property string $interest
 * @property float $income
 * @property integer $houseln
 * @property integer $othersln
 * @property string $notes
 * @property string $admin_note
 * @property integer $create_time
 * @property integer $update_time
 */
class Refinance extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Refinance the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{refinance}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, phone, email, objective, bank, outstanding, interest, income, houseln', 'required'),
            array('objective, status, banker, lawyer', 'numerical'),
            array('payment_date', 'length', 'max' => 10),
            array('outstanding, referal_fee, income, houseln, othersln, current_value, cashout', 'numerical'),
            array('payment_date', 'length', 'max' => 10),
            array('name, admin_note', 'length', 'max' => 250),
            array('email', 'email'),
            array('income','numerical', 'min' => 4500.0, 'tooSmall'=>'Your Monthly Income must more than RM 4500'),
            array('email, bank', 'length', 'max' => 50),
            array('propinfo, notes', 'length', 'max' => 350),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, phone, email, objective, propinfo, bank, banker, lawyer, payment_date, outstanding, interest, income, houseln, othersln, status,notes, admin_note, create_time, update_time', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Refinance ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'objective' => 'Objective',
            'propinfo' => 'Property Info',
            'bank' => 'Bank',
            'outstanding' => 'Outstanding Balance',
            'interest' => 'Interest',
            'income' => 'Monthly Income',
            'houseln' => 'Housing Loan (monthly)',
            'othersln' => 'Others Loan',
            'current_value' => 'Current Market Value',
            'cashout' => 'Cash Out',

            'banker' => 'Banker',
            'status' => 'Status',
            
            'lawyer' => 'Lawyer',
            'referal_fee' => 'Referal Fee',
            'payment_date' => 'Payment Date',
            
            'notes' => 'Notes',
            'admin_note' => 'Admin Note',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('phone', $this->phone);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('objective', $this->objective);
        $criteria->compare('propinfo', $this->propinfo, true);
        $criteria->compare('bank', $this->bank, true);
        $criteria->compare('outstanding', $this->outstanding);
        $criteria->compare('interest', $this->interest, true);
        $criteria->compare('income', $this->income);
        $criteria->compare('houseln', $this->houseln);
        $criteria->compare('othersln', $this->othersln);
        $criteria->compare('notes', $this->notes, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('banker', $this->banker, true);
        $criteria->compare('lawyer', $this->lawyer, true);
        
        $criteria->compare('referal_fee', $this->referal_fee, true);
        $criteria->compare('payment_date', $this->payment_date, true);
        
        $criteria->compare('admin_note', $this->admin_note, true);
        $criteria->compare('create_time', $this->create_time);
        $criteria->compare('update_time', $this->update_time);

        return new CActiveDataProvider($this, array(
        'criteria' => $criteria,
        'sort' => array(
        'defaultOrder' => 'create_time DESC',
            )
        ));
        
    }

    /**
     * This is invoked before the record is saved.
     * @return boolean whether the record should be saved.
     */
    protected function beforeSave() {
        if (parent::beforeSave()) {
            if ($this->isNewRecord) {
                $this->create_time = $this->update_time = time();
            }
            else
                $this->update_time = time();
            return true;
        }
        else
            return false;
    }

}