<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userID), array('view', 'id'=>$data->userID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groupID')); ?>:</b>
	<?php echo CHtml::encode($data->groupID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userName')); ?>:</b>
	<?php echo CHtml::encode($data->userName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullName')); ?>:</b>
	<?php echo CHtml::encode($data->fullName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientID')); ?>:</b>
	<?php echo CHtml::encode($data->clientID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phoneNo')); ?>:</b>
	<?php echo CHtml::encode($data->phoneNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeeID')); ?>:</b>
	<?php echo CHtml::encode($data->employeeID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentID')); ?>:</b>
	<?php echo CHtml::encode($data->departmentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwordStatus')); ?>:</b>
	<?php echo CHtml::encode($data->passwordStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwordAttempts')); ?>:</b>
	<?php echo CHtml::encode($data->passwordAttempts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateLastLogin')); ?>:</b>
	<?php echo CHtml::encode($data->dateLastLogin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recordStatus')); ?>:</b>
	<?php echo CHtml::encode($data->recordStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwordCanExpire')); ?>:</b>
	<?php echo CHtml::encode($data->passwordCanExpire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question')); ?>:</b>
	<?php echo CHtml::encode($data->question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer')); ?>:</b>
	<?php echo CHtml::encode($data->answer); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->dateUpdated); ?>
	<br />

	*/ ?>

</div>