<?php
Yii::import('application.modules.finance3.models.*');
class Grantrevenue1formController extends GxController {

	
	

	public function actionView($id) {
		if (!Yii::app()->getRequest()->getIsAjaxRequest())
			$this->render('view', array(
				'model' => $this->loadModel($id, 'grantrevenue1form'),
			));
		else
			$this->renderPartial('view', array(
				'model' => $this->loadModel($id, 'grantrevenue1form'),
			));
	}

	public function actionCreate() {
		$model = new grantrevenue1form;


		if (isset($_POST['grantrevenue1form'])) {
			$model->setAttributes($_POST['grantrevenue1form']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}
		if (!Yii::app()->getRequest()->getIsAjaxRequest())
			$this->render('create', array( 'model' => $model));
		else
			$this->renderPartial('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'grantrevenue1form');


		if (isset($_POST['grantrevenue1form'])) {
			$model->setAttributes($_POST['grantrevenue1form']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}
		if (!Yii::app()->getRequest()->getIsAjaxRequest())
			$this->render('update', array(
				'model' => $model,
				));
		else
			$this->renderPartial('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'grantrevenue1form')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$model = new grantrevenue1form('search');
		$model->unsetAttributes();

		if (isset($_GET['grantrevenue1form']))
			$model->setAttributes($_GET['grantrevenue1form']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

	public function actionAdmin() {
		$model = new grantrevenue1form('search');
		$model->unsetAttributes();

		if (isset($_GET['grantrevenue1form']))
			$model->setAttributes($_GET['grantrevenue1form']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}
