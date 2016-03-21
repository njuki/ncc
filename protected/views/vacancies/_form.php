<?php
/* @var $this VacanciesController */
/* @var $model Vacancies */
/* @var $form CActiveForm */
?>

<div class="form" style="width: 400px">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vacancies-form',
        'htmlOptions' => array('role'=>'form'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jobID'); ?>
                <?php echo $form->dropDownList($model, 'jobID', 
                        CHtml::listData(Jobs::model()->findAll(), 'jobID', 'jobTitle'), 
                        array('prompt' => 'Please select a Job Position', 'class'=>'form-control', 'style'=>'padding:0; height: 30px')); ?>
		
		<?php echo $form->error($model,'jobID'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'openingsAvailable'); ?>
		<?php echo $form->textField($model,'openingsAvailable',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'openingsAvailable'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'deadline'); ?>
		<?php //echo $form->textField($model,'deadline'); ?>
            
                <?php
                
                  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'model' => $model,
                            'attribute' => 'deadline',
                            //'options' => array('dateFormat' => "dd-mm-yy"),                                            
                             'htmlOptions' => array(
                                   'size' => '11',         // textField size
                                   'maxlength' => '10',    // textField maxlength
                              ),
                    ));
                
                ?>
		<?php echo $form->error($model,'deadline'); ?>
	</div>

	
	<div class="form-group">
		<?php echo $form->labelEx($model,'town'); ?>
		<?php echo $form->textField($model,'town',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'town'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'status'); ?>
		
                <?php echo $form->dropDownList($model, 'status',
                                      array(0 => 'Closed', 1 => 'Open'),
                                        array('prompt'=>'-- Specify the Vacancy Status') ); ?>
            
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->