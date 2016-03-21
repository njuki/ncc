<?php
/* @var $this JobsController */
/* @var $model Jobs */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->jobID,
);

$this->menu=array(
	array('label'=>'List Jobs', 'url'=>array('index')),
	array('label'=>'Create Jobs', 'url'=>array('create')),
	array('label'=>'Update Jobs', 'url'=>array('update', 'id'=>$model->jobID)),
	array('label'=>'Delete Jobs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jobID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jobs', 'url'=>array('admin')),
);
?>

<h1>View Jobs #<?php echo $model->jobID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jobID',
		'departmentID',
		'jobGroupID',
		'termsOfServiceID',
		'jobTitle',
		'reportsToID',
		'jobDescription',
		'jobQualification',
		'dateCreated',
		'createdBy',
		'dateModified',
		'modifiedBy',
	),
)); ?>
