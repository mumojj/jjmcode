<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('project_code')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->project_code), array('view', 'id' => $data->project_code)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::encode($data->id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('project_name')); ?>:
	<?php echo GxHtml::encode($data->project_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('project_financier')); ?>:
	<?php echo GxHtml::encode($data->project_financier); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('patner_institution')); ?>:
	<?php echo GxHtml::encode($data->patner_institution); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('project_coodinator')); ?>:
	<?php echo GxHtml::encode($data->project_coodinator); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('institution_coordinator')); ?>:
	<?php echo GxHtml::encode($data->institution_coordinator); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('program_year')); ?>:
	<?php echo GxHtml::encode($data->program_year); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('period')); ?>:
	<?php echo GxHtml::encode($data->period); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('account_number')); ?>:
	<?php echo GxHtml::encode($data->account_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('currency_disbursed')); ?>:
	<?php echo GxHtml::encode($data->currency_disbursed); ?>
	<br />
	*/ ?>

</div>