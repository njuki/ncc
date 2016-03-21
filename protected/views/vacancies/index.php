<?php
/* @var $this VacanciesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vacancies',
);

$this->menu=array(
	array('label'=>'Create Vacancies', 'url'=>array('create')),
	array('label'=>'Manage Vacancies', 'url'=>array('admin')),
);
?>

<h1>Vacancies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
