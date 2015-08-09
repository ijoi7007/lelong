<?php

/**
 * This is the model class for table "{{lelong}}".
 *
 * The followings are the available columns in table '{{lelong}}':
 * @property integer $id
 * @property string $reference_no
 * @property integer $reserve_price
 * @property string $property_address
 * @property string $area
 * @property string $state
 * @property string $property_size
 * @property string $restriction
 * @property string $property_description
 * @property string $property_type
 * @property string $auction_date
 * @property string $mode
 */
class Lelong extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lelong the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{lelong}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, reserve_price, property_address, area, state, property_size, restriction, property_description, property_type, auction_date, mode', 'required'),
			array('id, reserve_price', 'numerical', 'integerOnly'=>true),
			array('reference_no, restriction', 'length', 'max'=>30),
			array('property_type', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, reference_no, reserve_price, property_address, area, state, property_size, restriction, property_description, property_type, auction_date, mode', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'reference_no' => 'Reference No',
			'reserve_price' => 'Reserve Price',
			'property_address' => 'Property Address',
			'area' => 'Area',
			'state' => 'State',
			'property_size' => 'Property Size',
			'restriction' => 'Restriction',
			'property_description' => 'Property Description',
			'property_type' => 'Property Type',
			'auction_date' => 'Auction Date',
			'mode' => 'Mode',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('reference_no',$this->reference_no,true);
		$criteria->compare('reserve_price',$this->reserve_price);
		$criteria->compare('property_address',$this->property_address,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('property_size',$this->property_size,true);
		$criteria->compare('restriction',$this->restriction,true);
		$criteria->compare('property_description',$this->property_description,true);
		$criteria->compare('property_type',$this->property_type,true);
		$criteria->compare('auction_date',$this->auction_date,true);
		$criteria->compare('mode',$this->mode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}