<?php
Yii::import('application.models.*');

$projectCode = isset($_GET['project_code']) ? $_GET['project_code'] : null;

// Instantiate models and fetch data
$grantRevenue1Model = new grantrevenue1();
$revenuedataProvider = $grantRevenue1Model->search(array('project_code' => $projectCode));

$tukresearchgrantExpenditure1Model = new TukResearchGrantExpenditure1();
$expendituredataprovider = $tukresearchgrantExpenditure1Model->search(array('project_code' => $projectCode));

// Fetch data from VwResearchGrantSummary model
$vwResearchGrantSummaryModel = new VwResearchGrantSummary();
$summaryDataProvider = $vwResearchGrantSummaryModel->search();


// Fetch data from VwResearchGrantSummary model
$vwResearchGrantSummaryTotalModel = new VwResearchGrantSummaryTotal();
$summaryDataProvider2 = $vwResearchGrantSummaryTotalModel->search();
?>




<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label' => '<i class="icon-chevron-left"></i> Return',
    'type' => 'info', 
    'size' => 'medium', 
    'url' => array('admin'),
    'encodeLabel' => false,
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label' => 'Print page',
    'type' => 'danger', 
    'size' => 'medium', 
     'icon' => 'print',
    'url' => array('admin'),
    'encodeLabel' => false,
)); ?>

<h4>TOTAL SUMMARY PER PROJECT</h4>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'grant-summary-grid',
    'dataProvider' => $summaryDataProvider2,
    'columns' => array(
        
        'project_code',
        'total_revenue_sum',
        'total_expenditure_sum',
        'remaining_balance_sum',
    ),
));
?>



<h5>TOTAL SUMMARY OF ALL PROJECT</h5>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'grant-summary-grid',
    'dataProvider' => $summaryDataProvider,
    'columns' => array(
        'total_revenue_sum',
        'total_expenditure_sum',
        'remaining_balance_sum',
    ),
));
?>


<h4>REVENUE</h4>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'grant-revenue-grid',
    'dataProvider' => $revenuedataProvider,
    'columns' => array(
        'project_code',
        'source',
        'amount',
        'currency',
    ),
));
?>

<h4>EXPENDITURE</h4>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'grant-balance-grid',
    'dataProvider' => $expendituredataprovider,
    'columns' => array(
        'project_code',
        'expenditure_description',
        'amount',
        'currency',
       
    ),
));
?>
