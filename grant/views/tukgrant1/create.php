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

<h2 style="color: grey;"> <?php echo Yii::t('app', 'Create/Add the project profile: ') ; ?></h2>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));

?>