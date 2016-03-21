<?php
/* @var $this JobgroupsController */
/* @var $model Jobgroups */
/* @var $form CActiveForm */
?>

<div class="form" style="width: 400px">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobgroups-form',
        'htmlOptions' => array('role'=>'form'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jobGroupName'); ?>
		<?php echo $form->textField($model,'jobGroupName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'jobGroupName'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jobGroupDescription'); ?>
		<?php echo $form->textArea($model,'jobGroupDescription', array('maxlength' => 300, 'rows' => 6, 'cols' => 60)); ?>
		<?php echo $form->error($model,'jobGroupDescription'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'minSalary', array('size' => 40)); ?>
		<?php echo $form->textField($model,'minSalary'); ?>
		<?php echo $form->error($model,'minSalary'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'maxSalary'); ?>
		<?php echo $form->textField($model,'maxSalary'); ?>
		<?php echo $form->error($model,'maxSalary'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'houseAllowance'); ?>
		<?php echo $form->textField($model,'houseAllowance'); ?>
		<?php echo $form->error($model,'houseAllowance'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'commuterAllowance'); ?>
		<?php echo $form->textField($model,'commuterAllowance'); ?>
		<?php echo $form->error($model,'commuterAllowance'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>