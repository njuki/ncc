<?php
/* @var $this MinistriesController */
/* @var $data Ministries */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ministryID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ministryID), array('view', 'id'=>$data->ministryID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ministryName')); ?>:</b>
	<?php echo CHtml::encode($data->ministryName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ministryDescription')); ?>:</b>
	<?php echo CHtml::encode($data->ministryDescription); ?>
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


</div>