<?php

/**
 * This is the model class for table "usetb".
 *
 * The followings are the available columns in table 'usetb':
 * @property integer $UID
 * @property string $SubID
 * @property string $InsID
 * @property string $ins_month
 * @property integer $ins_month_num
 * @property integer $ins_year
 * @property integer $budget_year
 * @property string $Uoil
 * @property string $Uwater
 * @property string $Uelec
 * @property string $Poil
 * @property string $Pwater
 * @property string $Pelec
 * @property string $Ur1
 * @property string $Ur2
 * @property string $Ur3
 */
class ResourceUsage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ResourceUsage the static model class
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
		return 'usetb';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SubID, InsID, ins_year, Uoil, Uwater, Uelec, Poil, Pwater, Pelec', 'required'),
			array('ins_month_num, ins_year, budget_year', 'numerical', 'integerOnly'=>true),
			array('SubID', 'length', 'max'=>2),
			array('InsID, Uoil, Uwater, Uelec, Poil, Pwater, Pelec', 'length', 'max'=>10),
			array('ins_month', 'length', 'max'=>20),
			array('Ur1, Ur2, Ur3', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('UID, SubID, InsID, ins_month, ins_month_num, ins_year, budget_year, Uoil, Uwater, Uelec, Poil, Pwater, Pelec, Ur1, Ur2, Ur3', 'safe', 'on'=>'search'),
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
			'UID' => 'Uid',
			'SubID' => 'Sub',
			'InsID' => 'Ins',
			'ins_month' => 'Ins Month',
			'ins_month_num' => 'Ins Month Num',
			'ins_year' => 'Ins Year',
			'budget_year' => 'Budget Year',
			'Uoil' => 'Uoil',
			'Uwater' => 'Uwater',
			'Uelec' => 'Uelec',
			'Poil' => 'Poil',
			'Pwater' => 'Pwater',
			'Pelec' => 'Pelec',
			'Ur1' => 'Ur1',
			'Ur2' => 'Ur2',
			'Ur3' => 'Ur3',
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

		$criteria->compare('UID',$this->UID);
		$criteria->compare('SubID',$this->SubID,true);
		$criteria->compare('InsID',$this->InsID,true);
		$criteria->compare('ins_month',$this->ins_month,true);
		$criteria->compare('ins_month_num',$this->ins_month_num);
		$criteria->compare('ins_year',$this->ins_year);
		$criteria->compare('budget_year',$this->budget_year);
		$criteria->compare('Uoil',$this->Uoil,true);
		$criteria->compare('Uwater',$this->Uwater,true);
		$criteria->compare('Uelec',$this->Uelec,true);
		$criteria->compare('Poil',$this->Poil,true);
		$criteria->compare('Pwater',$this->Pwater,true);
		$criteria->compare('Pelec',$this->Pelec,true);
		$criteria->compare('Ur1',$this->Ur1,true);
		$criteria->compare('Ur2',$this->Ur2,true);
		$criteria->compare('Ur3',$this->Ur3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getMonthName()
	{
		switch ($this->ins_month_num) {
			case 1: return 'มกราคม';
			case 2: return 'กุมภาพันธ์';
			case 3: return 'มีนาคม';
			case 4: return 'เมษายน';
			case 5: return 'พฤษภาคม';
			case 6: return 'มิถุนายน';
			case 7: return 'กรกฎาคม';
			case 8: return 'สิงหาคม';
			case 9: return 'กันยายน';
			case 10: return 'ตุลาคม';
			case 11: return 'พฤศจิกายน';
			case 12: return 'ธันวาคม';
		}
	}
}