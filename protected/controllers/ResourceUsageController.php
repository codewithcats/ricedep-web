<?php

class ResourceUsageController extends Controller
{
	public function actionIndex()
	{
		$member = Yii::app()->user;
		if(in_array($member->subId, array('0', '1')))
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
			$this->render('centralUser', array(
				'records'=>$records,
				'institute'=>$ins
			));
			return;
		}
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
		return;
	}

	public function actionCentralEnergy()
	{
		$member = Yii::app()->user;
		if(in_array($member->subId, array('0', '1')))
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
			return;
		}
		return;
	}

	public function actionEnergyFiscalYear()
	{
		$member = Yii::app()->user;
		if(in_array($member->subId, array('0', '1')))
		{
			$names = Institute::model()->findAll('SubID > 0 ORDER BY InsID ASC');
			$records = ResourceUsage::model()->findAll(
			'SubID=:s AND InsID=:i',
			array(
				':s'=>'1',
				':i'=>'a01'
			)
		);
			$this->render('energyFiscalYear', array(
				'names'=>$names
			));
			return;
		}
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