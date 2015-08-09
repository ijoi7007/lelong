<?php

/**
 * This is the model class for table "{{forsale}}".
 *
 * The followings are the available columns in table '{{forsale}}':
 * @property integer $id
 * @property string $name
 * @property integer $phone
 * @property string $email
 * @property string $propinfo
 * @property string $renoinfo
 * @property integer $value
 * @property integer $price
 * @property string $note
 * @property string $admin_note
 * @property integer $create_time
 * @property integer $update_time
 */
class Forsale extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Forsale the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{forsale}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, phone, email, price', 'required'),
            array('phone, value, price, create_time, update_time', 'numerical', 'integerOnly' => true),
            array('name, renoinfo, note, admin_note', 'length', 'max' => 250),
            array('email', 'length', 'max' => 50),
            array('email', 'email'),
            array('propinfo', 'length', 'max' => 350),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, phone, email, propinfo, renoinfo, value, price, note, admin_note, create_time, update_time', 'safe', 'on' => 'search'),
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
            'renoinfo' => 'Renovation Detail',
            'value' => 'Estimation Value',
            'price' => 'Asking Price',
            'note' => 'Notes',
            'admin_note' => 'Admin Notes',
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
        $criteria->compare('phone', $this->phone);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('propinfo', $this->propinfo, true);
        $criteria->compare('renoinfo', $this->renoinfo, true);
        $criteria->compare('value', $this->value);
        $criteria->compare('price', $this->price);
        $criteria->compare('note', $this->note, true);
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