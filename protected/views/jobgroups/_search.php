<?php
/* @var $this JobgroupsController */
/* @var $model Jobgroups */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jobGroupID'); ?>
		<?php echo $form->textField($model,'jobGroupID',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jobGroupName'); ?>
		<?php echo $form->textField($model,'jobGroupName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jobGroupDescription'); ?>
		<?php echo $form->textField($model,'jobGroupDescription',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minSalary'); ?>
		<?php echo $form->textField($model,'minSalary'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maxSalary'); ?>
		<?php echo $form->textField($model,'maxSalary'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'houseAllowance'); ?>
		<?php echo $form->textField($model,'houseAllowance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'commuterAllowance'); ?>
		<?php echo $form->textField($model,'commuterAllowance'); ?>
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