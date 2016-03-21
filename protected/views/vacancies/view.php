<?php
/* @var $this VacanciesController */
/* @var $model Vacancies */

$this->breadcrumbs=array(
	'Vacancies'=>array('index'),
	$model->vacancyID,
);

$this->menu=array(
	array('label'=>'List Vacancies', 'url'=>array('index')),
	array('label'=>'Create Vacancies', 'url'=>array('create')),
	array('label'=>'Update Vacancies', 'url'=>array('update', 'id'=>$model->vacancyID)),
	array('label'=>'Delete Vacancies', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->vacancyID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vacancies', 'url'=>array('admin')),
);
?>

<h1>View Vacancies #<?php echo $model->vacancyID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'vacancyID',
		'jobID',
		'openingsAvailable',
		'deadline',
		'emailAddress',
		'dateCreated',
		'createdBy',
		'dateModified',
		'modifiedBy',
		'town',
		'status',
	),
)); ?>
