
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
	'type'=>'horizontal',
)); ?>

	
	<?php echo $form->textField($model, 'id'); ?>

	
	<?php echo $form->textField($model, 'project_name', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'project_code', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'project_financier', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'patner_institution', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'project_coodinator', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'institution_coordinator', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'program_year', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'period', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'account_number', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'currency_disbursed', array('maxlength' => 100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
		'type'=>'primary',
		'label'=>'Search',
	)); ?>	</div>

<?php $this->endWidget(); ?>

