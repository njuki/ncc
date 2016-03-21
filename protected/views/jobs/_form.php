<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */
?>

<div class="form" style="width: 400px">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobs-form',
        'htmlOptions' => array('role'=>'form'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'departmentID'); ?>
                <?php echo $form->dropDownList($model, 'departmentID', CHtml::listData(Ministries::model()->findAll(), 'ministryID', 'ministryName'), array('prompt' => 'Please select a Department', 'class'=>'form-control', 'style'=>'padding:0; height: 30px')); ?>
		
		<?php echo $form->error($model,'departmentID'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jobGroupID'); ?>
                <?php echo $form->dropDownList($model, 'jobGroupID', CHtml::listData(Jobgroups::model()->findAll(), 'jobGroupID', 'jobGroupName'), array('prompt' => 'Please select a job group', 'class'=>'form-control', 'style'=>'padding:0; height: 30px')); ?>
		<?php echo $form->error($model,'jobGroupID'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'termsOfServiceID'); ?>
               <?php echo $form->dropDownList($model, 'termsOfServiceID', 
                       CHtml::listData(Termsofservice::model()->findAll(), 'termsOfServiceID', 'termsOfServiceName'), array('prompt' => 'Please select Terms of Service', 'class'=>'form-control', 'style'=>'padding:0; height: 30px')); ?>
		
		<?php echo $form->error($model,'termsOfServiceID'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jobTitle'); ?>
		<?php echo $form->textField($model,'jobTitle',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jobTitle'); ?>
	</div>

	

	<div class="form-group">
		<?php echo $form->labelEx($model,'jobDescription'); ?>
		<?php echo $form->textArea($model,'jobDescription', array('maxlength' => 500, 'rows' => 8, 'cols' => 60)); ?>
		<?php echo $form->error($model,'jobDescription'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jobQualification'); ?>
		<?php echo $form->textArea($model,'jobQualification', array('maxlength' => 500, 'rows' => 8, 'cols' => 60)); ?>
		<?php echo $form->error($model,'jobQualification'); ?>
	</div>

	

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->