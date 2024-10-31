<?php

$this->breadcrumbs = array(
    $model->label(2) => array('index'),
    Yii::t('app', 'Manage'),
);
?>


<h2><?php echo Yii::t('app', 'Balance Management')  ?></h2>



<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label' => 'Add Project Code ',
    'type' => 'success',
    'size' => 'medium',
    'url' => array('create'),
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label' => '<i class="icon-home"></i> Return', // Replace 'icon-name' with the desired icon class
    'type' => 'warning',
    'size' => 'medium',
    'url' => array('tukgrant1/admin'),
    'encodeLabel' => false, // This ensures HTML in the label is not encoded
)); ?>

<h4>Please add the Project codes that don't exist in the list below to view the balance</h4>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'grantbalance-grid',
    'dataProvider' => $model->search(),
    //'filter' => $model,
    'type' => 'striped bordered condensed',
    'columns' => array(

        'project_code',
        'total_revenue',
        'total_expenditure',
        'remaining_balance',
        
        /*
        'revenue_id',
        'expenditure_id',
        */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}', // Show only the "View" button
            'buttons' => array(
                'view' => array(
                    'url' => 'Yii::app()->createUrl("grantrevenue/view", array("id"=>$data->primaryKey))', // Replace "controller" with your actual controller name
                ),
            ),
        ),
    ),
)); ?>
