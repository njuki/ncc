<?php
/* @var $this VacanciesController */
/* @var $data Vacancies */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacancyID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->vacancyID), array('view', 'id'=>$data->vacancyID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobID')); ?>:</b>
	<?php echo CHtml::encode($data->jobID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('openingsAvailable')); ?>:</b>
	<?php echo CHtml::encode($data->openingsAvailable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deadline')); ?>:</b>
	<?php echo CHtml::encode($data->deadline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailAddress')); ?>:</b>
	<?php echo CHtml::encode($data->emailAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateModified')); ?>:</b>
	<?php echo CHtml::encode($data->dateModified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedBy')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('town')); ?>:</b>
	<?php echo CHtml::encode($data->town); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>