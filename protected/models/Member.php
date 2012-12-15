<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property integer $UserID
 * @property string $Username
 * @property string $Password
 * @property string $Status
 * @property string $SubID
 * @property string $InsID
 */
class Member extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Member the static model class
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
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Username, Password, Status, SubID, InsID', 'required'),
			array('Username, Password', 'length', 'max'=>20),
			array('Status', 'length', 'max'=>5),
			array('SubID', 'length', 'max'=>2),
			array('InsID', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('UserID, Username, Password, Status, SubID, InsID', 'safe', 'on'=>'search'),
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
			'UserID' => 'User',
			'Username' => 'Username',
			'Password' => 'Password',
			'Status' => 'Status',
			'SubID' => 'Sub',
			'InsID' => 'Ins',
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

		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('Username',$this->Username,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Status',$this->Status,true);
		$criteria->compare('SubID',$this->SubID,true);
		$criteria->compare('InsID',$this->InsID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}