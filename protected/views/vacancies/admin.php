<?php
/* @var $this VacanciesController */
/* @var $model Vacancies */

$this->breadcrumbs=array(
	'Vacancies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Vacancies', 'url'=>array('index')),
	array('label'=>'Create Vacancies', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vacancies-grid').yiiGridView('update', {
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
				<i class="fa fa-bar-chart-o"></i> Manage Vacancies
			</h3>
        </div>
        <div class="panel-body">
        <a href="<?php echo Yii::app()->createUrl('vacancies/create'); ?>" class="btn btn-primary btn-s pull-right"><b>+</b>
	Add Vacancy</a>
            <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'itemsCssClass' => 'table table-striped custab',
		'id' => 'users-grid',
		'dataProvider' => $model->search (),
		
		'columns' => array (
				 array(
                    'header' => 'Vacancy Title',
                    'value' => '$data->job->jobTitle'
                ),
		// 'jobID',
		'openingsAvailable',
		'deadline',
		//'emailAddress',
		'dateCreated',
		
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
            'url'=>'Yii::app()->createUrl("vacancies/update", array("id"=>$data->vacancyID))',
        	 'options'=>array('class'=>'btn btn-info btn-xs',
        	 		'title'=>'Edit',
        	 		'style'=>'margin-right: 5px'), //HTML options for the button tag.
        ),
		'del' => array (
			'label' => '<span class="glyphicon glyphicon-remove"></span> Del',
			'url' => 'Yii::app()->createUrl("vacancies/update", array("id"=>$data->vacancyID))',
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



