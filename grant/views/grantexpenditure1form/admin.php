<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);
?>


<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>



<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Create a '.$model->label(),
    'type'=>'info', 
    'size'=>'mini', 
	'url'=>array('create'),
)); ?>
	

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'grantexpenditure1form-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'type'=>'striped bordered condensed',
	'columns' => array(
		'id',
		array(
				'name'=>'project_code',
				'value'=>'GxHtml::valueEx($data->projectCode)',
				'filter'=>GxHtml::listDataEx(TukResearchGrant1::model()->findAllAttributes(null, true)),
				),
		'expenditure_description',
		'amount',
		'date',
		'currency',
		/*
		'grant_id',
		*/
		array(
			'class' => 'bootstrap.widgets.TbGroupButtonColumn',
		),
	),
)); ?>
