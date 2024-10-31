<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);
?>

<style>
    .button-container {
        display: flex;
        justify-content: space-between;
    }
</style>


<h2><?php echo Yii::t('app', 'EXPENDITURE MANAGEMENT') ?></h2>




<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Create expenditure ',
    'type'=>'success', 
    'size'=>'medium', 
	'url'=>array('grantexpenditure1form/create'),
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label' => '<i class="icon-home"></i> Return', // Replace 'icon-name' with the desired icon class
    'type' => 'warning', 
    'size' => 'medium', 
    'url' => array('tukgrant1/admin'),
    'encodeLabel' => false, // This ensures HTML in the label is not encoded
)); ?>

	

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'tuk-research-grant-expenditure1-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'type'=>'striped bordered condensed',
	'columns' => array(
		
		'project_code',
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
