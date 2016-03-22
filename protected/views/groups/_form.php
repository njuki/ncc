<?php
/* @var $this GroupsController */
/* @var $model Groups */
/* @var $form CActiveForm */
?>

<div class="form" style="width: 400px">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groups-form',
	'htmlOptions' => array('role'=>'form'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'groupName'); ?>
		<?php echo $form->textField($model,'groupName',array('size'=>50,'maxlength'=>50,  'class'=>'form-control')); ?>
		<?php echo $form->error($model,'groupName'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('size'=>60,'maxlength'=>100,  'class'=>'form-control')); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
	
		<?php if(!$model->isNewRecord) {?>
		<div class="form-group">
		<?php echo $form->labelEx($model,'recordStatus'); ?>
		<?php echo $form->dropDownList($model, 'recordStatus', array('0'=>'No', '1'=>'Yes'), array('prompt' => 'Please select status', 'class'=>'form-control', 'style'=>'padding:0; height: 30px')); ?>
		<?php echo $form->error($model,'recordStatus'); ?>
	</div>
	<?php }?>
	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-info')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->