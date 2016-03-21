<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jobID'); ?>
		<?php echo $form->textField($model,'jobID',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departmentID'); ?>
		<?php echo $form->textField($model,'departmentID',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jobGroupID'); ?>
		<?php echo $form->textField($model,'jobGroupID',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'termsOfServiceID'); ?>
		<?php echo $form->textField($model,'termsOfServiceID',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jobTitle'); ?>
		<?php echo $form->textField($model,'jobTitle',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reportsToID'); ?>
		<?php echo $form->textField($model,'reportsToID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jobDescription'); ?>
		<?php echo $form->textField($model,'jobDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jobQualification'); ?>
		<?php echo $form->textField($model,'jobQualification'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateCreated'); ?>
		<?php echo $form->textField($model,'dateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdBy'); ?>
		<?php echo $form->textField($model,'createdBy',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateModified'); ?>
		<?php echo $form->textField($model,'dateModified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modifiedBy'); ?>
		<?php echo $form->textField($model,'modifiedBy',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->