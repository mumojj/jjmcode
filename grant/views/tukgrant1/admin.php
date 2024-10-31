<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);
?>

<!-- CSS for centering the heading and buttons -->
<style type="text/css">
	.adn {
		display: flex;
		justify-content: center;
		gap: 15px; /* Adds space between buttons */
		margin-top: 20px; /* Adjust the margin to position buttons properly */
	}

	/* Make buttons the same size */
	.adn .btn {
		width: 150px; /* Set a smaller fixed width for all buttons */
		padding: 5px 10px; /* Adjust top/bottom and left/right padding to reduce height */
		font-size: 12px; /* Optional: reduce font size if needed */
	}

	/* Ensure button has flex layout */
   .btn-with-icon {
    display: flex;
    align-items: center; /* Aligns items vertically center */
    justify-content: center; /* Centers content horizontally */
}

   .btn-with-icon .icon-home, .btn-with-icon .icon-print { /* Adjust if you're using a different icon class */
    margin-right: 8px; /* Space between icon and label */
}

	/* Center the heading */
	.centered-heading {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100px; /* Adjust the height as needed */
		text-align: center;
	}
</style>

<!-- Center the heading -->
<div class="centered-heading">
	<h1 style="color: grey;"><?php echo Yii::t('app', 'T.U.K RESEARCH GRANT MANAGEMENT') ?></h1>

</div>

<div class="adn">
	<?php 
    $this->widget('bootstrap.widgets.TbButton', array(
        'type' => 'primary',
        'size' => 'large',
        'icon' => 'home',  // Font Awesome Home Icon
        'label' => 'Home',  // Add "Home" label to the button
        'url' => Yii::app()->createUrl('//grant/'),
        'htmlOptions' => array(
            'class' => 'portal-link btn-with-icon', // Apply btn-with-icon class here
            'title' => "Navigate to home"
        )
    ));
?>

	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Add + Grant/project  ',
		'type'=>'success', 
		'size'=>'large', 
		'url'=>array('create'),
	)); ?>

	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Show all Transaction ',
		'type'=>'info', 
		'size'=>'large', 
		'url'=>array('tukgrant1/transaction'), // Modified URL to pass project_code
	)); ?>

	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Print Page:  ',
		'type'=>'danger', 
		'size'=>'large', 
		'icon' => 'print',
		'url'=>array('grantbalance/create'),
		'htmlOptions' => array(
            'class' => 'btn-with-icon', // Apply btn-with-icon class here
        )
	)); ?>
</div>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'tukgrant1-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'type'=>'striped bordered condensed',
	'columns' => array(
		'project_name',
		'project_code',
		'project_financier',
		'patner_institution',
		array(
			'class' => 'bootstrap.widgets.TbGroupButtonColumn',
		),
	),
)); ?>
