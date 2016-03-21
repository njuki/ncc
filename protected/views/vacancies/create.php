<?php
/* @var $this VacanciesController */
/* @var $model Vacancies */

$this->breadcrumbs=array(
	'Vacancies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vacancies', 'url'=>array('index')),
	array('label'=>'Manage Vacancies', 'url'=>array('admin')),
);
?>

<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-bar-chart-o"></i> Manage Vacancies
			</h3>
		</div>
		<div class="panel-body">
			<a href="<?php echo Yii::app()->createUrl('vacancies/admin'); ?>"
				class="btn btn-primary btn-s pull-right"><i class="fa fa-backward"></i> Back to Vacancies</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
	</div>
</div>