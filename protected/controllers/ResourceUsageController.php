<?php

class ResourceUsageController extends Controller
{
	public function actionIndex()
	{
		$member = Yii::app()->user;
		if(in_array($member->subId, array('0', '1')))
		{
			$this->renderCentralUserPage($member);
			return;
		}
		$this->renderGeneralUserPage($member);
		return;
	}

	private function renderGeneralUserPage($member)
	{
		$ins = Institute::model()->find(
			'InsID=:i', array(':i'=>$member->insId)
		);
		$records = ResourceUsage::model()->findAll(
			'SubID=:s AND InsID=:i',
			array(
				':s'=>$member->subId,
				':i'=>$member->insId
			)
		);
		$this->render('generalUser', array(
			'records'=>$records,
			'institute'=>$ins
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

	public function actionEnergyFiscalYear()
	{	
		$this->render('energyFiscalYear', array(
			
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