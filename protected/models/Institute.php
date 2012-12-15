<?php

/**
 * This is the model class for table "institute".
 *
 * The followings are the available columns in table 'institute':
 * @property string $InsID
 * @property string $NameIns
 * @property string $SubID
 */
class Institute extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Institute the static model class
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
		return 'institute';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InsID, NameIns, SubID', 'required'),
			array('InsID', 'length', 'max'=>10),
			array('NameIns', 'length', 'max'=>20),
			array('SubID', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('InsID, NameIns, SubID', 'safe', 'on'=>'search'),
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
			'InsID' => 'Ins',
			'NameIns' => 'Name Ins',
			'SubID' => 'Sub',
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

		$criteria->compare('InsID',$this->InsID,true);
		$criteria->compare('NameIns',$this->NameIns,true);
		$criteria->compare('SubID',$this->SubID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}