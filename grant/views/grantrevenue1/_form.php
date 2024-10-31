

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id' => 'grantrevenue1-form',
	'type'=> 'horizontal',
	'enableAjaxValidation' => false,
));
?>


	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<h4> Enter the current project revenue below:</h4>

		<?php
// Check if the project_code variable is set before using it
if (isset($project_code)) {
    $model->project_code = $project_code;
}

echo $form->textField($model, 'project_code', array('maxlength' => 100, 'style' => 'display:none;'));
?>

		
		<?php echo $form->textFieldRow($model, 'source', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Source')); ?>
		
		
		<?php echo $form->textFieldRow($model, 'amount', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Amount')); ?>
		
		
		<?php echo $form->textFieldRow($model, 'date', array('append'=>'<i >DD/MM/YY</i>')); ?>
		
		
		<?php echo $form->dropDownListRow($model, 'currency', array(

        'kes' => 'KES',
		'ugs' => 'UGS',
		'tzs' => 'TZS',
        'euro' => 'Euro',
        'ponds' => 'Pounds',
		'dollar' => 'AU Dollar',
		'dollar' => 'HK Dollar',
		'dollar' => 'US Dollar',
        'yen' => 'Japan Yen',
		'yuan' => 'Chinese Yuan',)); ?>
		

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        
        <?php $this->widget('bootstrap.widgets.TbButton', array(
       'label' => '<i class="icon-chevron-left"></i> Return', // Replace 'icon-name' with the desired icon class
       'type' => 'warning', 
       'size' => 'medium', 
       'url' => 'javascript:history.back()', // Use JavaScript to go back
       'encodeLabel' => false, // This ensures HTML in the label is not encoded
     )); ?>

        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $model->isNewRecord ? 'Create' : 'Save',
            'icon' => 'glyphicon glyphicon-floppy-disk',
        )); ?>
    </div>
</div>
<?php	
$this->endWidget();
?>
