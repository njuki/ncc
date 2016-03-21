<?php
/* @var $this JobgroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jobgroups',
);

$this->menu=array(
	array('label'=>'Create Jobgroups', 'url'=>array('create')),
	array('label'=>'Manage Jobgroups', 'url'=>array('admin')),
);
?>

<h1>Jobgroups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
