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


<h2><?php echo Yii::t('app', 'REVENUE MANAGEMENT')  ?></h2>




<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Create Revenue ',
    'type'=>'success', 
    'size'=>'medium', 
	'url'=>array('grantrevenue1form/create'),
)); ?>


<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label' => '<i class="icon-home"></i> Return', // Replace 'icon-name' with the desired icon class
    'type' => 'warning', 
    'size' => 'medium', 
    'url' => array('tukgrant1/admin'),
    'encodeLabel' => false, // This ensures HTML in the label is not encoded
)); ?>

	

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'grantrevenue1-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'type'=>'striped bordered condensed',
	'columns' => array(
		'project_code',
		'source',
		'amount',
		'date',
		'currency',
		array(
			'class' => 'bootstrap.widgets.TbGroupButtonColumn',
		),
	),
)); ?>
