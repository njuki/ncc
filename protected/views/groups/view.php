<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	'Groups'=>array('index'),
	$model->groupID,
);

$this->menu=array(
	array('label'=>'List Groups', 'url'=>array('index')),
	array('label'=>'Create Groups', 'url'=>array('create')),
	array('label'=>'Update Groups', 'url'=>array('update', 'id'=>$model->groupID)),
	array('label'=>'Delete Groups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->groupID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Groups', 'url'=>array('admin')),
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
				<i class="fa fa-bar-chart-o"></i> View Groups #<?php echo $model->groupID; ?>
			</h3>
		</div>
		<div class="panel-body">
		<a href="<?php echo Yii::app()->createUrl('groups/admin'); ?>"
				class="btn btn-primary btn-s pull-right"><i class="fa fa-backward"></i> Back to Groups</a>
		
		<a href="<?php echo Yii::app()->createUrl('groups/update', array('id'=>$model->groupID)); ?>"
				class="btn btn-warning btn-s pull-right" style="margin-right: 5px"><i class="glyphicon glyphicon-edit"></i> Edit Group</a>
		

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=>'table table-striped custab'),
	'attributes'=>array(
		'groupID',
		'groupName',
		'description',
		'recordStatus',
		'createdBy',
		'updatedBy',
		'dateCreated',
		'dateUpdated',
		'isEditable',
	),
)); ?>

</div>
	</div>
</div>