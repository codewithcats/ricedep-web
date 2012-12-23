<?php

class ResourceUsageController extends Controller
{
	public function actionIndex($msg=false, $msgType=false)
	{
		$member = Yii::app()->user;
		if(in_array($member->subId, array('0', '1')))
		{
			$this->renderCentralUserPage($member);
			return;
		}
		$this->renderGeneralUserPage($member, $msg, $msgType);
		return;
	}

	private function renderGeneralUserPage($member, $msg=false, $msgType=false)
	{
		$ins = Institute::model()->find(
			'InsID=:i', array(':i'=>$member->insId)
		);
		$records = ResourceUsage::model()->findAll(
			array(
				'condition'=>'SubID=:s AND InsID=:i',
				'params'=>array(
					':s'=>$member->subId,
					':i'=>$member->insId),
				'order'=>'ins_year DESC, ins_month_num DESC'
			)
		);
		$this->render('generalUser', array(
			'records'=>$records,
			'institute'=>$ins,
			'msg'=>$msg,
			'msgType'=>$msgType,
		));
	}

	private function renderCentralUserPage($member)
	{
		$ins = Institute::model()->find(
			'InsID=:i', array(':i'=>$member->insId)
		);
		$this->render('centralUser', array(
			'institute'=>$ins
		));
	}

	public function actionAddRecord()
	{
		$model = new ResourceUsageForm;
		if(isset($_POST['ResourceUsageForm']))
		{
			$model->attributes = $_POST['ResourceUsageForm'];
			if($model->validate())
			{
				$user = Yii::app()->user;
				$usage = new ResourceUsage;
				$usage->SubID = $user->subId;
				$usage->InsID = $user->insId;
				$usage->ins_month_num = $model->month;
				$usage->ins_year = $model->year;
				$usage->Uoil = $model->uoil;
				$usage->Poil = $model->poil;
				$usage->Uwater = $model->uwater;
				$usage->Pwater = $model->pwater;
				$usage->Uelec = $model->uelec;
				$usage->Pelec = $model->pelec;
				$usage->budget_year = $model->month>=10? $model->year+1: $model->year;

				if($usage->save())
				{
					$this->redirect(
						array('resourceUsage/index',
							'msg'=>'ข้อมูลถูกบันทึกเรียบร้อยแล้ว',
							'msgType'=>'success'));
					return;
				}
			}
		}
		$this->render('addRecordForm', array(
			'model'=>$model,
		));
	}

	public function actionCentralEnergy()
	{
		$ins = Institute::model()->find(
			'InsID=:i', array(':i'=>'a01')
		);
		$records = ResourceUsage::model()->findAll(
			'SubID=:s AND InsID=:i',
			array(
				':s'=>'1',
				':i'=>'a01'
			)
		);
		$this->render('centralEnergy', array(
			'records'=>$records,
			'institute'=>$ins
		));
	}

	public function actionEnergyFiscalYear($index='elec')
	{	
		$sql = 
		'SELECT summary.*, ins.NameIns, ins.InsID FROM '.
			'(SELECT * FROM '.
				'(SELECT '. 
					'InsID AS InsID_2554,'. 
					'SUM(Uoil) AS sum_uoil_2554,'.
					'SUM(Uwater) AS sum_uwater_2554,'.
					'SUM(Uelec) AS sum_uelec_2554,'.
					'SUM(Poil) AS sum_poil_2554,'.
					'SUM(Pwater) AS sum_pwater_2554,'.
					'SUM(Pelec) AS sum_pelec_2554 '.
				'FROM energy.usetb '. 
				"WHERE InsID <> '' AND budget_year = 2554 ".
				'GROUP BY InsID, budget_year) sum_2554 '.
			'RIGHT OUTER JOIN '. 
				'(SELECT '. 
					'InsID AS InsID_2555,'. 
					'SUM(Uoil) AS sum_uoil_2555,'.
					'SUM(Uwater) AS sum_uwater_2555,'.
					'SUM(Uelec) AS sum_uelec_2555,'.
					'SUM(Poil) AS sum_poil_2555,'.
					'SUM(Pwater) AS sum_pwater_2555,'.
					'SUM(Pelec) AS sum_pelec_2555 '.
				'FROM energy.usetb '.
				"WHERE InsID <> '' AND budget_year = 2555 ".
				'GROUP BY InsID, budget_year) sum_2555 '.
			'ON sum_2554.InsID_2554 = sum_2555.InsID_2555) summary '.
		'JOIN energy.institute ins ON summary.InsID_2555 = ins.InsID';
		$reader = Yii::app()->db->createCommand()->setText($sql)->query();
		$rows = $reader->readAll();
		$this->render('energyFiscalYear', array(
			'rows'=>$rows,
			'index'=>$index
		));
		return;
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}