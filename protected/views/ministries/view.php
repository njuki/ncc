<?php
/* @var $this MinistriesController */
/* @var $model Ministries */

$this->breadcrumbs=array(
	'Ministries'=>array('index'),
	$model->ministryID,
);

$this->menu=array(
	array('label'=>'List Ministries', 'url'=>array('index')),
	array('label'=>'Create Ministries', 'url'=>array('create')),
	array('label'=>'Update Ministries', 'url'=>array('update', 'id'=>$model->ministryID)),
	array('label'=>'Delete Ministries', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ministryID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ministries', 'url'=>array('admin')),
);
?>



<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-bar-chart-o"></i> Manage Ministries
			</h3>
		</div>
		<div class="panel-body">
			<a href="<?php echo Yii::app()->createUrl('ministries/admin'); ?>"
				class="btn btn-primary btn-s pull-right"><i class="fa fa-backward"></i> Back to Ministries</a>

                                
                                <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ministryID',
		'ministryName',
		'ministryDescription',
		'dateCreated',
		'createdBy',
		'dateModified',
		'modifiedBy',
	),
)); ?>



</div>
	</div>
</div>




