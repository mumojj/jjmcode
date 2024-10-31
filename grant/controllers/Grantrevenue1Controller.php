<?php

class Grantrevenue1Controller extends GxController {

	
	

	public function actionView($id) {
		if (!Yii::app()->getRequest()->getIsAjaxRequest())
			$this->render('view', array(
				'model' => $this->loadModel($id, 'grantrevenue1'),
			));
		else
			$this->renderPartial('view', array(
				'model' => $this->loadModel($id, 'grantrevenue1'),
			));
	}

	

	public function actionCreate($project_code) {
		$model = new grantrevenue1;


		if (isset($_POST['grantrevenue1'])) {
			$model->setAttributes($_POST['grantrevenue1']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}
		if (!Yii::app()->getRequest()->getIsAjaxRequest())

		$this->render('create', array( 'model' => $model,'project_code'=>$project_code));
		//$this->render('create', array( 'model' => $model));  this is the initial code
		else
		    //$this->renderPartial('create', array( 'model' => $model)); this is the initial code
			$this->renderPartial('create', array( 'model' => $model ,'project_code'=>$project_code));
	}

	public function actionUpdate($id)
{
    $model = $this->loadModel($id, 'Grantrevenue1');

    if (isset($_POST['Grantrevenue1'])) {
        $model->attributes = $_POST['Grantrevenue1'];
        if ($model->save()) {
            $this->redirect(array('view', 'id' => $model->id));
        }
    }

    $project_code = Yii::app()->request->getParam('project_code', ''); // Get project_code from request or set a default value

    if (!Yii::app()->getRequest()->getIsAjaxRequest()) {
        $this->render('update', array(
            'model' => $model,
            'project_code' => $project_code, // Pass project_code to the view
        ));
    } else {
        $this->renderPartial('update', array(
            'model' => $model,
            'project_code' => $project_code, // Pass project_code to the view
        ));
    }
}


	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'grantrevenue1')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$model = new grantrevenue1('search');
		$model->unsetAttributes();

		if (isset($_GET['grantrevenue1']))
			$model->setAttributes($_GET['grantrevenue1']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

	public function actionAdmin() {
		$model = new grantrevenue1('search');
		$model->unsetAttributes();

		if (isset($_GET['grantrevenue1']))
			$model->setAttributes($_GET['grantrevenue1']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}
