<?php

/**
 * This is the model class for table "{{listing}}".
 *
 * The followings are the available columns in table '{{listing}}':
 * @property integer $listingid
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $folder
 * @property string $propcategory
 * @property string $proptype
 * @property string $titletype
 * @property string $landarea
 * @property string $buildup
 * @property string $room
 * @property string $bathroom
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property integer $postcode
 * @property string $state
 * @property string $reno
 * @property integer $asking
 * @property string $value
 * @property string $note
 * @property integer $status
 */
class Listing extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Listing the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{listing}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, phone, propcategory, proptype, landarea, address1, address2, state, asking, status', 'required'),
            array('postcode, asking, status, value, state, propcategory, proptype, titletype', 'numerical', 'integerOnly' => true),
            array('name, address1, address2, address3', 'length', 'max' => 128),
            array('reno, note', 'length', 'max' => 250),
            array('phone', 'length', 'max' => 20),
            array('email, folder', 'length', 'max' => 50),
            array('landarea, buildup, room, bathroom', 'length', 'max' => 10),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('listingid, folder, propcategory, proptype, titletype, asking, status', 'safe', 'on' => 'search'),
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
            'listingid' => 'Listing ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'folder' => 'Folder',
            'propcategory' => 'Property Category',
            'proptype' => 'Property Type',
            'titletype' => 'Title Type',
            'landarea' => 'Land Area',
            'buildup' => 'Build Up',
            'room' => 'Room',
            'bathroom' => 'Bathroom',
            'address1' => 'Address1',
            'address2' => 'Address2',
            'address3' => 'Town',
            'postcode' => 'Postcode',
            'state' => 'State',
            'reno' => 'Reno Detail',
            'asking' => 'Asking (RM)',
            'value' => 'Market Value (RM)',
            'note' => 'Notes',
            'status' => 'Status',
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

        $criteria->compare('listingid', $this->listingid);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('folder', $this->folder, true);
        $criteria->compare('propcategory', $this->propcategory, true);
        $criteria->compare('proptype', $this->proptype, true);
        $criteria->compare('titletype', $this->titletype, true);
        $criteria->compare('landarea', $this->landarea, true);
        $criteria->compare('buildup', $this->buildup, true);
        $criteria->compare('room', $this->room, true);
        $criteria->compare('bathroom', $this->bathroom, true);
        $criteria->compare('address1', $this->address1, true);
        $criteria->compare('address2', $this->address2, true);
        $criteria->compare('address3', $this->address3, true);
        $criteria->compare('postcode', $this->postcode);
        $criteria->compare('state', $this->state, true);
        $criteria->compare('reno', $this->reno, true);
        $criteria->compare('asking', $this->asking);
        $criteria->compare('value', $this->value, true);
        $criteria->compare('note', $this->note, true);
        $criteria->compare('status', $this->status);
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