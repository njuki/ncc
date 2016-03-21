<?php
/* @var $this JobgroupsController */
/* @var $model Jobgroups */

$this->breadcrumbs=array(
	'Jobgroups'=>array('index'),
	$model->jobGroupID,
);

$this->menu=array(
	array('label'=>'List Jobgroups', 'url'=>array('index')),
	array('label'=>'Create Jobgroups', 'url'=>array('create')),
	array('label'=>'Update Jobgroups', 'url'=>array('update', 'id'=>$model->jobGroupID)),
	array('label'=>'Delete Jobgroups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jobGroupID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jobgroups', 'url'=>array('admin')),
);
?>

<h1>View Jobgroups #<?php echo $model->jobGroupID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jobGroupID',
		'jobGroupName',
		'jobGroupDescription',
		'minSalary',
		'maxSalary',
		'houseAllowance',
		'commuterAllowance',
		'dateCreated',
		'createdBy',
		'dateModified',
		'modifiedBy',
	),
)); ?>
