<?php

/**
 * This is the model class for table "{{loan}}".
 *
 * The followings are the available columns in table '{{loan}}':
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $propinfo
 * @property integer $income
 * @property integer $commitment
 * @property string $notes
 * @property string $admin_note
 * @property integer $create_time
 * @property integer $update_time
 */
class Loan extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Loan the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{loan}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, phone, email, income, commitment', 'required'),
            array('income, commitment, create_time, update_time', 'numerical', 'integerOnly' => true),
            array('name, admin_note', 'length', 'max' => 250),
            array('phone', 'length', 'max' => 20),
            array('email', 'length', 'max' => 50),
            array('email', 'email'),
            array('propinfo, notes', 'length', 'max' => 350),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, phone, email, propinfo, income, commitment, notes, admin_note, create_time, update_time', 'safe', 'on' => 'search'),
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
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'propinfo' => 'Property Detail',
            'income' => 'Monthly Income',
            'commitment' => 'Monthly Commitments',
            'notes' => 'Notes',
            'admin_note' => 'Admin Note',
            'create_time' => 'Created Time',
            'update_time' => 'Updated Time',
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
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('propinfo', $this->propinfo, true);
        $criteria->compare('income', $this->income);
        $criteria->compare('commitment', $this->commitment);
        $criteria->compare('notes', $this->notes, true);
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