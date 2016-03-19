<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	'Groups'=>array('index'),
	$model->groupID=>array('view','id'=>$model->groupID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Groups', 'url'=>array('index')),
	array('label'=>'Create Groups', 'url'=>array('create')),
	array('label'=>'View Groups', 'url'=>array('view', 'id'=>$model->groupID)),
	array('label'=>'Manage Groups', 'url'=>array('admin')),
);
?>

<h1>Update Groups <?php echo $model->groupID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>