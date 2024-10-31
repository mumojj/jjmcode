<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'tuk-research-expenditure1-form',
    'type'=> 'horizontal',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'), // Add this line
));
?>

<p class="note">
    <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
</p>

<?php echo $form->errorSummary($model); ?>

<h4> Enter the current project expenditure below:</h4>

<?php
// Check if the project_code variable is set before using it
if (isset($project_code)) {
    $model->project_code = $project_code;
}

echo $form->textField($model, 'project_code', array('maxlength' => 100, 'style' => 'display:none;'));
?>

<?php echo $form->textFieldRow($model, 'expenditure_description', array('maxlength' => 225, 'class' => 'form-control', 'placeholder' => 'Expenditure Description')); ?>

<?php echo $form->textFieldRow($model, 'amount', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Amount')); ?>

<?php echo $form->textFieldRow($model, 'date', array('append'=>'<i>DD/MM/YY</i>')); ?>

<?php echo $form->dropDownListRow($model, 'currency', array(
    'kes' => 'KES',
    'ugs' => 'UGS',
    'tzs' => 'TZS',
    'euro' => 'Euro',
    'pounds' => 'Pounds',
    'au_dollar' => 'AU Dollar',
    'hk_dollar' => 'HK Dollar',
    'us_dollar' => 'US Dollar',
    'yen' => 'Japan Yen',
    'yuan' => 'Chinese Yuan',
)); ?>

<?php echo $form->fileFieldRow($model, 'upload_image', array('class' => 'form-control')); // Add this line ?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'label' => '<i class="icon-chevron-left"></i> Return',
            'type' => 'warning', 
            'size' => 'medium', 
            'url' => 'javascript:history.back()',
            'encodeLabel' => false,
        )); ?>

        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $model->isNewRecord ? 'Create' : 'Save',
            'icon' => 'glyphicon glyphicon-floppy-disk',
        )); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
