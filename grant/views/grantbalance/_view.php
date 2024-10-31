<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('project_code')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->projectCode)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('total_revenue')); ?>:
	<?php echo GxHtml::encode($data->total_revenue); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('total_expenditure')); ?>:
	<?php echo GxHtml::encode($data->total_expenditure); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('remaining_balance')); ?>:
	<?php echo GxHtml::encode($data->remaining_balance); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date')); ?>:
	<?php echo GxHtml::encode($data->date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('revenue_id')); ?>:
	<?php echo GxHtml::encode($data->revenue_id); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('expenditure_id')); ?>:
	<?php echo GxHtml::encode($data->expenditure_id); ?>
	<br />
	*/ ?>

</div>