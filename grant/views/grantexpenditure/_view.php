<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('project_code')); ?>:
	<?php echo GxHtml::encode($data->project_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('expenditure_description')); ?>:
	<?php echo GxHtml::encode($data->expenditure_description); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('amount')); ?>:
	<?php echo GxHtml::encode($data->amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date')); ?>:
	<?php echo GxHtml::encode($data->date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('currency')); ?>:
	<?php echo GxHtml::encode($data->currency); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('grant_id')); ?>:
	<?php echo GxHtml::encode($data->grant_id); ?>
	<br />

</div>