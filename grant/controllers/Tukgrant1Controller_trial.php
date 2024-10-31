<?php

class Tukgrant1Controller extends GxController {

	
	

	public function actionView($id) {
		if (!Yii::app()->getRequest()->getIsAjaxRequest())
			$this->render('view', array(
				'model' => $this->loadModel($id, 'Tukgrant1'),
			));
		else
			$this->renderPartial('view', array(
				'model' => $this->loadModel($id, 'Tukgrant1'),
	
			));

	}
	/*

	public function actionView($project_code) {
    $model = Tukgrant1::model()->findByAttributes(array('project_code' => $project_code));
    if ($model === null) {
        throw new CHttpException(404, 'The requested project does not exist.');
    }

    if (!Yii::app()->getRequest()->getIsAjaxRequest()) {
        $this->render('view', array(
            'model' => $model,
        ));
    } else {
        $this->renderPartial('view', array(
            'model' => $model,
        ));
    }
}*/


	public function actionCreate() {
		$model = new Tukgrant1;


		if (isset($_POST['Tukgrant1'])) {
			$model->setAttributes($_POST['Tukgrant1']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->project_code));
			}
		}
		if (!Yii::app()->getRequest()->getIsAjaxRequest())
			$this->render('create', array( 'model' => $model));
		else
			$this->renderPartial('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Tukgrant1');


		if (isset($_POST['Tukgrant1'])) {
			$model->setAttributes($_POST['Tukgrant1']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->project_code));
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
			$this->loadModel($id, 'Tukgrant1')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$model = new Tukgrant1('search');
		$model->unsetAttributes();

		if (isset($_GET['Tukgrant1']))
			$model->setAttributes($_GET['Tukgrant1']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

	public function actionAdmin() {
		$model = new Tukgrant1('search');
		$model->unsetAttributes();

		if (isset($_GET['Tukgrant1']))
			$model->setAttributes($_GET['Tukgrant1']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

	public function actionTransaction() {
    $model = new Grantrevenue1();
    $this->render('transaction', array(
        'model' => $model,
    ));
}


	 public function actionWelcome() {
        $this->render('welcome');
    }

	public function actionPdf($project_code) {
    $model = Tukgrant1::model()->findByPk($project_code); // Replace YourModelClassName with the name of your model
    $content = $this->renderPartial('pdfview', array('model' => $model), true);

    // Using yii-pdf extension to generate PDF
    Yii::import('ext.pdf.Pdf');
    Pdf::render($content, $model->project_name . '.pdf');
}

}
