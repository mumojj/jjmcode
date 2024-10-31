
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
	'type'=>'horizontal',
)); ?>

	
	<?php echo $form->dropDownList($model, 'id', GxHtml::listDataEx(TukResearchGrantExpenditure1::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>

	
	<?php echo $form->dropDownList($model, 'project_code', GxHtml::listDataEx(TukResearchGrant1::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>

	
	<?php echo $form->textField($model, 'total_revenue', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'total_expenditure', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'remaining_balance', array('maxlength' => 100)); ?>

	
	<?php echo $form->textField($model, 'date', array('maxlength' => 30)); ?>

	
	<?php echo $form->textField($model, 'revenue_id'); ?>

	
	<?php echo $form->textField($model, 'expenditure_id'); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
		'type'=>'primary',
		'label'=>'Search',
	)); ?>	</div>

<?php $this->endWidget(); ?>

