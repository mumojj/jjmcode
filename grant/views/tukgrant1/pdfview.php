<?php


// Use $model to display project details
echo "<h1>Project Details</h1>";
echo "Project Name: " . CHtml::encode($model->project_name) . "<br>";
echo "Project Code: " . CHtml::encode($model->project_code) . "<br>";
echo "Project Financier: " . CHtml::encode($model->project_financier) . "<br>";
echo "Partner Institution: " . CHtml::encode($model->patner_institution) . "<br>";
echo "Project Coordinator: " . CHtml::encode($model->project_coodinator) . "<br>";
echo "Institution Coordinator: " . CHtml::encode($model->institution_coordinator) . "<br>";
echo "Program Year: " . CHtml::encode($model->program_year) . "<br>";
echo "Period: " . CHtml::encode($model->period) . "<br>";
echo "Account Number: " . CHtml::encode($model->account_number) . "<br>";
echo "Currency Disbursed: " . CHtml::encode($model->currency_disbursed) . "<br>";
// Display other project details as needed
?>
