<?php
/* @var $this VacanciesController */
/* @var $model Vacancies */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'vacancyID'); ?>
		<?php echo $form->textField($model,'vacancyID',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jobID'); ?>
		<?php echo $form->textField($model,'jobID',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'openingsAvailable'); ?>
		<?php echo $form->textField($model,'openingsAvailable',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deadline'); ?>
		<?php echo $form->textField($model,'deadline'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emailAddress'); ?>
		<?php echo $form->textField($model,'emailAddress',array('size'=>60,'maxlength'=>100)); ?>
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

	<div class="row">
		<?php echo $form->label($model,'town'); ?>
		<?php echo $form->textField($model,'town',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->