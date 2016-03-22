<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form" style="width: 400px">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'htmlOptions' => array('role'=>'form'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'groupID'); ?>
		<?php echo $form->dropDownList($model, 'groupID', CHtml::listData(Groups::model()->findAll(), 'groupID', 'groupName'), array('prompt' => 'Please select a group', 'class'=>'form-control', 'style'=>'padding:0; height: 30px')); ?>
		<?php echo $form->error($model,'groupID'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'userName'); ?>
		<?php echo $form->textField($model,'userName',array('size'=>30,'maxlength'=>30, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'userName'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fullName'); ?>
		<?php echo $form->textField($model,'fullName',array('size'=>30,'maxlength'=>30, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'fullName'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'phoneNo'); ?>
		<?php echo $form->textField($model,'phoneNo',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'phoneNo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>70, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'departmentID'); ?>
		<?php echo $form->dropDownList($model, 'employeeID', CHtml::listData(Departments::model()->findAll(), 'departmentID', 'departmentName'), array('prompt' => 'Please select department', 'class'=>'form-control', 'style'=>'padding:0; height: 30px')); ?>
		<?php echo $form->error($model,'departmentID'); ?>
	</div>
	<?php if(!$model->isNewRecord) {?>
		<div class="form-group">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->dropDownList($model, 'active', array('0'=>'No', '1'=>'Yes'), array('prompt' => 'Please select status', 'class'=>'form-control', 'style'=>'padding:0; height: 30px')); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>
	<?php }?>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-info')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->