<?php
/* @var $this MinistriesController */
/* @var $model Ministries */

$this->breadcrumbs=array(
	'Ministries'=>array(
            'index'
            ),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ministries', 'url'=>array('index')),
	array('label'=>'Create Ministries', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ministries-grid').yiiGridView('update', {
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
				<i class="fa fa-bar-chart-o"></i> Manage Ministries
			</h3>
		</div>
		<div class="panel-body"><a href="<?php echo Yii::app()->createUrl('ministries/create'); ?>" class="btn btn-primary btn-s pull-right"><b>+</b>
					Add Ministry</a>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display: none">
<?php

$this->renderPartial ( '_search', array (
		'model' => $model 
) );
?>
</div>
			<!-- search-form -->

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'itemsCssClass' => 'table table-striped custab',
		'id' => 'ministries-grid',
		'dataProvider' => $model->search(),
		
		'columns' => array (
				
                                'ministryName',
				'ministryDescription',
				//'userName',
				//'fullName',
                                //'email',
				//'clientID',
				//'phoneNo',
		/*
		'employeeID',
		'email',
		'departmentID',
		'password',
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
		*/
		array
(
    'class'=>'CButtonColumn',
	'htmlOptions' => array('style'=>'width:180px'),
    'template'=>'{edit}{del}',
    'buttons'=>array
    (
        'edit' => array
        (
            'label'=>'<span class="glyphicon glyphicon-edit"></span> Edit',
            'url'=>'Yii::app()->createUrl("ministries/update", array("id"=>$data->ministryID))',
        	 'options'=>array('class'=>'btn btn-info btn-xs',
        	 		'title'=>'Edit',
        	 		'style'=>'margin-right: 5px'), //HTML options for the button tag.
        ),
		'del' => array (
			'label' => '<span class="glyphicon glyphicon-remove"></span> Del',
			'url' => 'Yii::app()->createUrl("ministries/update", array("id"=>$data->ministryID))',
			'options'=>array('class'=>'btn btn-danger btn-xs',
					'title'=>'Delete',
), //HTML options for the button tag.
				
		),
    ),
),
		) 
) );
?>
</div>
	</div>
</div>





