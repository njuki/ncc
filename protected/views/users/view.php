<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userID,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->userID)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>
		        <?php
if (Yii::app()->user->hasFlash('success')) {
?>
    <div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo Yii::app()->user->getFlash('success'); ?>
</div>
<?php
}
?>
<?php
if (Yii::app()->user->hasFlash('error')) {
?>
    <div class="alert alert-dismissable alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo Yii::app()->user->getFlash('error'); ?>
</div>
<?php
}
?>
<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-bar-chart-o"></i> View Users #<?php echo $model->userID; ?>
			</h3>
		</div>
		<div class="panel-body">
		<a href="<?php echo Yii::app()->createUrl('users/admin'); ?>"
				class="btn btn-primary btn-s pull-right"><i class="fa fa-backward"></i> Back to Users</a>
		
		<a href="<?php echo Yii::app()->createUrl('users/update', array('id'=>$model->userID)); ?>"
				class="btn btn-warning btn-s pull-right" style="margin-right: 5px"><i class="glyphicon glyphicon-edit"></i> Edit User</a>
		
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=>'table table-striped custab'),
	'attributes'=>array(
		'userID',
		'groupID',
		'userName',
		'fullName',
		'clientID',
		'phoneNo',
		'employeeID',
		'email',
		'departmentID',
		'passwordStatus',
		'passwordAttempts',
		'dateLastLogin',
		'recordStatus',
		'passwordCanExpire',
		'question',
		'answer',
		'createdBy',
		'updatedBy',
		'dateCreated',
		'dateUpdated',
		'active'
	),
)); ?>

</div>
	</div>
</div>