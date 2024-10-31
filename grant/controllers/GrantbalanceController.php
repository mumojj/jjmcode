<?php

class GrantbalanceController extends GxController {

	
	

	public function actionView($id) {
		if (!Yii::app()->getRequest()->getIsAjaxRequest())
			$this->render('view', array(
				'model' => $this->loadModel($id, 'grantbalance'),
			));
		else
			$this->renderPartial('view', array(
				'model' => $this->loadModel($id, 'grantbalance'),
			));
	}

	public function actionCreate() {
		$model = new grantbalance;


		if (isset($_POST['grantbalance'])) {
			$model->setAttributes($_POST['grantbalance']);

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
		$model = $this->loadModel($id, 'grantbalance');


		if (isset($_POST['grantbalance'])) {
			$model->setAttributes($_POST['grantbalance']);

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
			$this->loadModel($id, 'grantbalance')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$model = new grantbalance('search');
		$model->unsetAttributes();

		if (isset($_GET['grantbalance']))
			$model->setAttributes($_GET['grantbalance']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

	public function actionAdmin() {
		$model = new grantbalance('search');
		$model->unsetAttributes();

		if (isset($_GET['grantbalance']))
			$model->setAttributes($_GET['grantbalance']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}
