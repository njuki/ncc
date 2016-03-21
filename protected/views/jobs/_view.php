<?php
/* @var $this JobsController */
/* @var $data Jobs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jobID), array('view', 'id'=>$data->jobID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentID')); ?>:</b>
	<?php echo CHtml::encode($data->departmentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobGroupID')); ?>:</b>
	<?php echo CHtml::encode($data->jobGroupID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('termsOfServiceID')); ?>:</b>
	<?php echo CHtml::encode($data->termsOfServiceID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobTitle')); ?>:</b>
	<?php echo CHtml::encode($data->jobTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reportsToID')); ?>:</b>
	<?php echo CHtml::encode($data->reportsToID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobDescription')); ?>:</b>
	<?php echo CHtml::encode($data->jobDescription); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jobQualification')); ?>:</b>
	<?php echo CHtml::encode($data->jobQualification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateModified')); ?>:</b>
	<?php echo CHtml::encode($data->dateModified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedBy')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedBy); ?>
	<br />

	*/ ?>

</div>