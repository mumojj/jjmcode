<style type="text/css">
	.landing_page{
		display: flex;
		justify-content: center;
		flex-direction: column;
		align-items: center;
		gap: 15px;
		width: 100%;
		padding-top: 40px;
	}
	.landing-desc{
		font-weight: 500;
		padding: 12px;
		margin-top: 8px;
		margin-bottom: 18px;
		line-height: 30px;
		font-size: 1.8em;
		width: 100% !important;
		border-bottom: 2px solid #008080;
	}
	.portal-link{
		width: auto;
		background: #008080 !important;
		border-radius: 20px;
	}
	.portal-link:hover{
		width: auto;
		background: #075252 !important;
	}
</style>

<div class="landing_page">
	<div class="center landing-desc">
		Research Grant management portal
	</div>

	<?php 
		if(true):
	 		$this->widget('bootstrap.widgets.TbButton', array(
					'type' => 'info',
					'size' => 'large',
					'label' => 'Manage Research Grants',
					'url' => Yii::app()->createUrl('//grant/tukgrant1/admin'),
					'htmlOptions' => array(			        
				      'class' => 'portal-link',
				      'title' => "Manage units"
		   		)
			));
	 	endif;

		/**/
		if(true):
	 		$this->widget('bootstrap.widgets.TbButton', array(
					'type' => 'info',
					'size' => 'large',
					'label' => 'View all transactions',
					'url' => Yii::app()->createUrl('//grant/tukgrant1/transaction'),
					'htmlOptions' => array(			        
				      'class' => 'portal-link',
				      'title' => "View course curriculum"
		   		)
			));
	 	endif;