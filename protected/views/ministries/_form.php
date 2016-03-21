<?php
/* @var $this MinistriesController */
/* @var $model Ministries */
/* @var $form CActiveForm */
?>

<div class="form" style="width: 400px">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ministries-form',
        'htmlOptions' => array('role'=>'form'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ministryName'); ?>
		<?php echo $form->textField($model,'ministryName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ministryName'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ministryDescription'); ?>
		<?php echo $form->textArea($model,'ministryDescription', array('maxlength' => 300, 'rows' => 6, 'cols' => 60)); ?>
		<?php echo $form->error($model,'ministryDescription'); ?>
	</div>

	

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>