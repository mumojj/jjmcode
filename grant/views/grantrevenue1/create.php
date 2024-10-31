<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app', 'Add Revenue')  ?></h2>

<?php
$this->renderPartial('_form', array(
		 'model' => $model,
		'buttons' => 'create',
		'project_code'=>$project_code,
));
?>