<?php
/* @var $this GroupsController */
/* @var $data Groups */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('groupID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->groupID), array('view', 'id'=>$data->groupID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groupName')); ?>:</b>
	<?php echo CHtml::encode($data->groupName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recordStatus')); ?>:</b>
	<?php echo CHtml::encode($data->recordStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->dateUpdated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isEditable')); ?>:</b>
	<?php echo CHtml::encode($data->isEditable); ?>
	<br />

	*/ ?>

</div>