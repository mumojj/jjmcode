<?php



$this->breadcrumbs = array(
    $model->label(2) => array('index'),
    GxHtml::valueEx($model),
);



$this->menu=array(
    array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
    array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
    array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->project_code)),
    array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->project_code), 'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' | ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<!-- Rest of your view content using $model -->



    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label' => '<i class="icon-chevron-left"></i> Return',
        'type' => 'info', 
        'size' => 'medium', 
        'url' => array('admin'),
        'encodeLabel' => false,
    )); ?>

    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Add Revenue ',
        'type'=>'success', 
        'size'=>'medium', 
        'url'=>array('grantrevenue1/create', 'project_code' => $model->project_code), // Modified URL to pass project_code
    )); ?>

    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Add Expenses ',
        'type'=>'warning', 
        'size'=>'medium', 
        'url'=>array('grantexpenditure/create', 'project_code' => $model->project_code), // Modified URL to pass project_code
    )); ?>
    <h4></h4>
    <?php echo CHtml::beginForm('', 'post'); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label' => 'Generate PDF',
        'type' => 'danger',
        'size' => 'medium',
        'icon' => 'print',
        'buttonType' => 'submit',
        'htmlOptions' => array(
            'name' => 'pdf',
        ),
    )); ?>
    <?php echo CHtml::endForm(); ?>




<h4>PROJECT BALANCE: </h4>

<?php 
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'grant-balance-grid',
    'dataProvider' => $dataProvider,
    'columns' => array(
        'project_code',
        'total_revenue',
        'total_expenditure',
        'remaining_balance',
        'date',
        
    ),
));
?>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'type'=>'striped condensed',
    'data' => $model,
    'attributes' => array(
        'id',
        'project_name',
        'project_code',
        'project_financier',
        'patner_institution',
        'project_coodinator',
        'institution_coordinator',
        'program_year',
        'period',
        'account_number',
        'currency_disbursed',
    ),
));
?>

<?php 
echo '<h4>REVENUE</h4>';
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'grant-revenue-grid',
    'dataProvider' => $revenuedataProvider,
    'columns' => array(
        'project_code',
        'source',
        'amount',
        'currency',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}', // Edit and Delete buttons
            'buttons'=>array(
                'update'=>array(
                    'url'=>'Yii::app()->createUrl("grant/grantrevenue1/update", array("id"=>$data->primaryKey, "project_code"=>$data->project_code))',
                ),
                'delete'=>array(
                    'url'=>'Yii::app()->createUrl("grant/grantrevenue1/delete", array("id"=>$data->primaryKey))',
                ),
            ),
        ),
    ),
));
?>


<?php
echo '<h4>EXPENDITURE</h4>';
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'grant-expenditure-grid', 
    'dataProvider' => $expendituredataprovider,
    'columns' => array(
        'project_code',
        'expenditure_description',
        'amount',
        'currency',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}', // Edit and Delete buttons
            'buttons'=>array(
                'update'=>array(
                    'url'=>'Yii::app()->createUrl("grant/grantexpenditure/update", array("id"=>$data->primaryKey, "project_code"=>$data->project_code))',
                ),
                'delete'=>array(
                    'url'=>'Yii::app()->createUrl("grant/grantexpenditure/delete", array("id"=>$data->primaryKey))',
                ),
            ),
        ),
    ),
));
?>
<!--Form for generating the pdf-->

