<?php
/* @var $this UsersController */
/* @var $model Users */
$this->breadcrumbs = array (
		'Users' => array (
				'index' 
		),
		'Create' 
);

$this->menu = array (
		array (
				'label' => 'List Users',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Manage Users',
				'url' => array (
						'admin' 
				) 
		) 
);
?>
<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-bar-chart-o"></i> Create User
			</h3>
		</div>
		<div class="panel-body">
			<a href="<?php echo Yii::app()->createUrl('users/admin'); ?>"
				class="btn btn-primary btn-s pull-right"><i class="fa fa-backward"></i> Back to Users</a>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
	</div>
</div>