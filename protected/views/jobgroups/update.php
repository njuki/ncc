<?php
/* @var $this JobgroupsController */
/* @var $model Jobgroups */

$this->breadcrumbs=array(
	'Jobgroups'=>array('index'),
	$model->jobGroupID=>array('view','id'=>$model->jobGroupID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jobgroups', 'url'=>array('index')),
	array('label'=>'Create Jobgroups', 'url'=>array('create')),
	array('label'=>'View Jobgroups', 'url'=>array('view', 'id'=>$model->jobGroupID)),
	array('label'=>'Manage Jobgroups', 'url'=>array('admin')),
);
?>

<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-bar-chart-o"></i> Manage Users
			</h3>
		</div>
		<div class="panel-body">
			<a href="<?php echo Yii::app()->createUrl('jobgroups/admin'); ?>"
				class="btn btn-primary btn-s pull-right"><i class="fa fa-backward"></i> Back to Job Groups</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
	</div>
</div>