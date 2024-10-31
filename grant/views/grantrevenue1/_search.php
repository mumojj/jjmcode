
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
	'type'=>'horizontal',
)); ?>

	
	<?php echo $form->textField($model, 'id'); ?>

	
	<?php echo $form->textField($model, 'project_code', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'source', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'amount', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'date', array('maxlength' => 30)); ?>

	
	<?php echo $form->textField($model, 'currency', array('maxlength' => 30)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
		'type'=>'primary',
		'label'=>'Search',
	)); ?>	</div>

<?php $this->endWidget(); ?>

