<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label' => '<i class="icon-home"></i> Return', // Replace 'icon-name' with the desired icon class
    'type' => 'warning', 
    'size' => 'medium', 
    'url' => array('grantrevenue1/admin'),
    'encodeLabel' => false, // This ensures HTML in the label is not encoded
)); ?>

<h1><?php echo Yii::t('app', 'View Grant Revenue: ')  . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php	$this->widget('bootstrap.widgets.TbDetailView', array(
    'type'=>'striped condensed',
	'data' => $model,
	'attributes' => array(
'id',
'project_code',
'source',
'amount',
'date',
'currency',
	),
)); ?>

