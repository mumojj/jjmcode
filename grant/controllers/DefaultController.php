<?php

class DefaultController extends GxController
{	
	/*
	public function filters() {
		return array(
				'accessControl', 
			);
	}

	/*
	public function accessRules() {
		return array(
			array('allow', 
				'actions' => array(                 
						"index",							
					),
				'roles'=>array(9999),
			),
			array('deny', 
				'users'=>array('*'),
			),
		);
	}
	*/
	public function actionIndex()
	{
		$this->render('index');
	}
}
?>