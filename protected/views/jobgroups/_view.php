<?php
/* @var $this JobgroupsController */
/* @var $data Jobgroups */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobGroupID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jobGroupID), array('view', 'id'=>$data->jobGroupID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobGroupName')); ?>:</b>
	<?php echo CHtml::encode($data->jobGroupName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobGroupDescription')); ?>:</b>
	<?php echo CHtml::encode($data->jobGroupDescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minSalary')); ?>:</b>
	<?php echo CHtml::encode($data->minSalary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maxSalary')); ?>:</b>
	<?php echo CHtml::encode($data->maxSalary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('houseAllowance')); ?>:</b>
	<?php echo CHtml::encode($data->houseAllowance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commuterAllowance')); ?>:</b>
	<?php echo CHtml::encode($data->commuterAllowance); ?>
	<br />

	<?php /*
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