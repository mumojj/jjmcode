<?php


class Tukgrant1Controller extends GxController {

	
	

	public function actionView($id) {
        $model = $this->loadModel($id, 'Tukgrant1');
        $projectCode = isset($_GET['project_code']) ? $_GET['project_code'] : null;

        $grantBalanceModel = new grantbalance();
        $dataProvider = $grantBalanceModel->search();
        $dataProvider->criteria->addCondition('project_code = :projectCode');
        $dataProvider->criteria->params[':projectCode'] = $model->project_code;

        $grantRevenue1Model = new grantrevenue1();
        $revenuedataProvider = $grantRevenue1Model->search(array('project_code' => $projectCode));
        $revenuedataProvider->criteria->addCondition('project_code = :projectCode');
        $revenuedataProvider->criteria->params[':projectCode'] = $model->project_code;

        $tukresearchgrantExpenditure1Model = new TukResearchGrantExpenditure1();
        $expendituredataprovider = $tukresearchgrantExpenditure1Model->search(array('project_code' => $projectCode));
        $expendituredataprovider->criteria->addCondition('project_code = :projectCode');
        $expendituredataprovider->criteria->params[':projectCode'] = $model->project_code;

        if (isset($_POST['pdf'])) {
            // Log user activity
            $activity = new UserActivity();
            $activity->agent = "user : ID " . Yii::app()->user->id;
            $activity->category = 5;
            $activity->theuser = Yii::app()->user->id;
            $activity->user_cat = 2;
            $activity->details = "Downloaded project details -> project code: " . $model->project_code;
            $activity->date_recorded = time();
            $activity->save();

            // Generate PDF
            $content = $this->renderPartial('pdfview', array(
                'model' => $model,
                'dataProvider' => $dataProvider,
                'revenuedataProvider' => $revenuedataProvider,
                'expendituredataprovider' => $expendituredataprovider,
            ), true);

            // Using yii-pdf extension to generate PDF
            Yii::import('ext.pdf.Pdf');
            $pdf = new Pdf();
            $pdf->content = $content;
            $pdf->output = Pdf::DEST_DOWNLOAD;
            $pdf->filename = $model->project_name . '.pdf';
            $pdf->render();
        } else {
            if (!Yii::app()->getRequest()->getIsAjaxRequest()) {
                $this->render('view', array(
                    'model' => $model,
                    'dataProvider' => $dataProvider,
                    'revenuedataProvider' => $revenuedataProvider,
                    'expendituredataprovider' => $expendituredataprovider,
                ));
            } else {
                $this->renderPartial('view', array(
                    'model' => $model,
                    'dataProvider' => $dataProvider,
                    'revenuedataProvider' => $revenuedataProvider,
                    'expendituredataprovider' => $expendituredataprovider,
                ));
            }
        }
    }

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
    $model = new grantrevenue1();
    $this->render('transaction', array(
        'model' => $model,
    ));
}


	 public function actionWelcome() {
        if (isset($_GET['project_code'])) {
            // Redirect to the specific view with the project_code
            $this->redirect(Yii::app()->createUrl('/finance3/tukgrant1/view', array('id' => $_GET['project_code'])));
			var_dump($url);

        } else {
            // If project_code is not provided, simply render the welcome page
            $this->render('welcome');
        }
	 }

	 public function actionPdf($project_code) {
        $model = Tukgrant1::model()->findByPk($project_code); // Find the model by project code
        
        // Render the view and capture the output
        $content = $this->renderPartial('pdfview', array('model' => $model), true);

        // Using yii-pdf extension to generate PDF
        Yii::import('ext.pdf.Pdf');

        // Create PDF object
        $pdf = new Pdf();
        $pdf->content = $content;
        $pdf->output = Pdf::DEST_DOWNLOAD; // or Pdf::DEST_FILE to save it to a file
        $pdf->filename = $model->project_name . '.pdf';

        // Render the PDF
        $pdf->render();
    }



}
