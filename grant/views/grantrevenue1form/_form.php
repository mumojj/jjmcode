

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id' => 'grantrevenue1form-form',
	'type'=> 'horizontal',
	'enableAjaxValidation' => false,
));
?>



	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>
	<h4>Please enter all the revenue details of the project you have selected below</h4>

		<?php echo $form->dropDownListRow($model, 'project_code', GxHtml::listDataEx(tukgrant1::model()->findAllAttributes(null, true)),array('prompt'=>'Select one')); ?>
		
		
		<?php echo $form->textFieldRow($model, 'source', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Source')); ?>
		
		
		<?php echo $form->textFieldRow($model, 'amount', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Amount')); ?>
		
		
		<?php echo $form->textFieldRow($model, 'date',array('append'=>'<i >DD/MM/YY</i>')); ?>
		
		
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
       'url' => array('grantrevenue1/admin'),
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
