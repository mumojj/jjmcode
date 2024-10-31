<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'tukgrant1-form',
    'type'=> 'horizontal',
    'enableAjaxValidation' => false,
)); ?>

<style>
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            width: 80%; /* Adjust width as needed */
        }
    </style>

<div class="row">
    <div class="col-md-6">
        <?php echo $form->textFieldRow($model, 'project_name', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Project Name')); ?>
        <?php echo $form->textFieldRow($model, 'project_code', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Project Code')); ?>
        <?php echo $form->textFieldRow($model, 'project_financier', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Project Financier')); ?>
        <?php echo $form->textFieldRow($model, 'patner_institution', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Partner Institution')); ?>
    </div>
    <div class="col-md-6">
        <?php echo $form->textFieldRow($model, 'project_coodinator', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Project Coordinator')); ?>
        <?php echo $form->textFieldRow($model, 'institution_coordinator', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Institution Coordinator')); ?>
        <?php echo $form->textFieldRow($model, 'program_year', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Program Year')); ?>
        <?php echo $form->dropDownListRow($model, 'period', array(
            '1' => '1 year',
            '2' => '2 years',
            '3' => '3 years',
            '4' => '4 years',
            '5' => '5 years',
            '6' => 'more than 5',
        ), array('class' => 'form-control')); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <?php echo $form->textFieldRow($model, 'account_number', array('maxlength' => 100, 'class' => 'form-control', 'placeholder' => 'Account Number')); ?>
    </div>
    <div class="col-md-6">
        <?php echo $form->dropDownListRow($model, 'currency_disbursed', array(
            'kes' => 'KES',
            'ugs' => 'UGS',
            'tzs' => 'TZS',
            'euro' => 'Euro',
            'ponds' => 'Pounds',
            'dollar' => 'AU Dollar',
            'dollar' => 'HK Dollar',
            'dollar' => 'US Dollar',
            'yen' => 'Japan Yen',
            'yuan' => 'Chinese Yuan',
        ), array('class' => 'form-control')); ?>
    </div>
</div>

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


<?php $this->endWidget(); ?>
