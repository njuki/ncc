<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>
<div class="col-lg-12">
<div class="panel panel-primary">
<div class="panel-body">
<!-- <div class="wide form"> -->
<div class="form" style="width: 400px">
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
        'htmlOptions' => array('role'=>'form'),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'groupID'); ?>
               <?php echo $form->dropDownList($model,'groupID',
                        CHtml::listData(Groups::model()->findAll(),'groupID','groupName'),
                        array('empty' => 'Select User group'));?>
		
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'userName'); ?>
		<?php echo $form->textField($model,'userName',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'fullName'); ?>
		<?php echo $form->textField($model,'fullName',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'phoneNo'); ?>
		<?php echo $form->textField($model,'phoneNo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	

	<div class="form-group">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'departmentID'); ?>
		<?php echo $form->textField($model,'departmentID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>
</div>    
</div>    