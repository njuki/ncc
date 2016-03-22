<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	'Groups'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Groups', 'url'=>array('index')),
	array('label'=>'Create Groups', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#groups-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-bar-chart-o"></i> Manage Groups
			</h3>
		</div>
		<div class="panel-body">
		

	
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
<a title="Create New Group" href="<?php echo Yii::app()->createUrl('groups/create'); ?>" class="btn btn-primary btn-s pull-right"><b>+</b>
					Add Group</a>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'groups-grid',
	'itemsCssClass' => 'table table-striped custab',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'groupID',
		'groupName',
		'description',
		'recordStatus',
		'createdBy',
		'updatedBy',
		/*
		'dateCreated',
		'dateUpdated',
		'isEditable',
		*/
		array(
			'class'=>'CButtonColumn',
				'htmlOptions' => array('style'=>'width:250px'),
				'template'=>'{details}{edit}{del}',
				'buttons'=>array
				(
						 
						'details' => array
						(
								'label'=>'<span class="glyphicon glyphicon-search"></span> View',
								'url'=>'Yii::app()->createUrl("groups/view", array("id"=>$data->groupID))',
								'options'=>array('class'=>'btn btn-success btn-xs',
										'title'=>'View Details',
										'style'=>'margin-right: 5px'), //HTML options for the button tag.
						),
						'edit' => array
						(
								'label'=>'<span class="glyphicon glyphicon-edit"></span> Edit',
								'url'=>'Yii::app()->createUrl("groups/update", array("id"=>$data->groupID))',
								'options'=>array('class'=>'btn btn-info btn-xs',
										'title'=>'Edit',
										'style'=>'margin-right: 5px'), //HTML options for the button tag.
						),
						'del' => array (
								'label' => '<span class="glyphicon glyphicon-remove"></span> Del',
								'url' => 'Yii::app()->createUrl("groups/delete", array("id"=>$data->groupID))',
								'options'=>array('class'=>'btn btn-danger btn-xs',
										'title'=>'Delete',
										'style'=>'margin-right: 5px'
								),
						
						),
						)
		),
	),
)); ?>
</div>
	</div>
</div>
