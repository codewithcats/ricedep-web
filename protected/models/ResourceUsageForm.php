<?php

class ResourceUsageForm extends CFormModel
{
	public $month;
	public $year;
	public $uelec;
	public $pelec;
	public $uwater;
	public $pwater;
	public $uoil;
	public $poil;

	public function rules()
	{
		return array(
			array('month, year, uelec, pelec, uwater, pwater, uoil, poil', 'required',
				'message'=>'คุณจำเป็นต้องระบุ{attribute}ที่ต้องการ'),
			array('year', 'numerical', 'min'=>2500, 'max'=>2600,
				'message'=> 'ต้องระบุเป็นตัวเลขเท่านั้น',
				'tooSmall'=>'ต้องเป็นตัวเลขที่มีค่าอย่างน้อย {min}',
				'tooBig'=>'ต้องเป็นตัวเลขที่มีค่าไม่เกิน {max}'),
			array('uelec, pelec, uwater, pwater, uoil, poil', 'numerical', 'min'=>0,
				'message'=> 'ต้องระบุเป็นตัวเลขเท่านั้น',
				'tooSmall'=>'ต้องเป็นตัวเลขที่มีค่าอย่างน้อย {min}',)
		);
	}

	public function attributeLabels()
	{
		return array(
			'month'=>'เดือน',
			'year'=>'ปี',
			'uelec'=>'จำนวนหน่วย',
			'pelec'=>'จำนวนบาท',
			'uwater'=>'จำนวนหน่วย',
			'pwater'=>'จำนวนบาท',
			'uoil'=>'จำนวนหน่วย',
			'poil'=>'จำนวนบาท',
		);
	}

	public function validate($attributes=NULL, $clearErrors=true)
	{
		if($clearErrors) $this->clearErrors();
		$usage = ResourceUsage::model()->find(
			'ins_month_num=:m AND ins_year=:y',
			array(':m'=>$this->month, ':y'=>$this->year)
		);
		$valid = $usage==null;
		if(!$valid)
		{
			$this->addError('month', 'มีข้อมูลของเดือนและปีที่ถูกเลือกอยู่ในฐานข้อมูลแล้ว');
			return false;
		}
		return parent::validate($attributes, $clearErrors);
	}
}