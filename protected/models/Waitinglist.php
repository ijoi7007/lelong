<?php

/**
 * This is the model class for table "{{waitinglist}}".
 *
 * The followings are the available columns in table '{{waitinglist}}':
 * @property string $id
 * @property string $name
 * @property integer $phone
 * @property string $email
 * @property string $proptype
 * @property string $city
 * @property string $target_area
 * @property integer $budget
 * @property string $note
 * @property integer $create_time
 */
class Waitinglist extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Waitinglist the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{waitinglist}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, phone, email, proptype, city, budget', 'required'),
            array('phone, budget', 'numerical', 'integerOnly' => true),
            array('name, email, city, target_area', 'length', 'max' => 45),
            array('note, proptype', 'length', 'max' => 250),
            array('email', 'email'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, phone, email, proptype, city, target_area, budget, note, create_time', 'safe', 'on' => 'search'),
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
            'proptype' => 'Property Type',
            'city' => 'City / Town',
            'target_area' => 'Target Area',
            'budget' => 'Budget',
            'note' => 'Notes',
            'create_time' => 'Created Time',
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

        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('phone', $this->phone);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('proptype', $this->proptype, true);
        $criteria->compare('city', $this->city, true);
        $criteria->compare('target_area', $this->target_area, true);
        $criteria->compare('budget', $this->budget);
        $criteria->compare('note', $this->note, true);
        $criteria->compare('create_time', $this->create_time);

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
                $this->create_time = time();
                //$this->create_time = $this->update_time = time();
            }
            //else
            //  $this->update_time = time();
            return true;
        }
        else
            return false;
    }

}