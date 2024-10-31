

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id' => 'grantbalance-form',
	'type'=> 'horizontal',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<?php
// Assuming $form, $model, and GxHtml are already defined

// Fetching all project codes from the pol_tuk_research_grant1 table
$allProjectCodes = CHtml::listData(Tukgrant1::model()->findAll(), 'project_code', 'project_code');

// Fetching project codes from pol_tuk_research_grant_balance table
$existingProjectCodes = CHtml::listData(grantbalance::model()->findAll(), 'project_code', 'project_code');

// Filtering out project codes that exist in the pol_tuk_research_grant_balance table
$availableProjectCodes = array_diff($allProjectCodes, $existingProjectCodes);

// Dropdown list with only project codes not in pol_tuk_research_grant_balance table
echo $form->dropDownListRow($model, 'project_code', $availableProjectCodes, array('prompt'=>'Select project ID to view the Balance'));
?>

		
		
		
		
		

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'label' => '<i class="icon-chevron-left"></i> Return',
            'type' => 'warning',
            'size' => 'medium',
            'url' => array('tukgrant1/admin'),
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
<?php	
$this->endWidget();
?>
