<?php
/* @var $this HabitacionesController */
/* @var $model Habitaciones */

$this->breadcrumbs=array(
	'Habitaciones'=>array('index'),
	$model->cod_hab=>array('view','id'=>$model->cod_hab),
	'Update',
);

$this->menu=array(
	array('label'=>'List Habitaciones', 'url'=>array('index')),
	array('label'=>'Create Habitaciones', 'url'=>array('create')),
	array('label'=>'View Habitaciones', 'url'=>array('view', 'id'=>$model->cod_hab)),
	array('label'=>'Manage Habitaciones', 'url'=>array('admin')),
);
?>

<h1>Update Habitaciones <?php echo $model->cod_hab; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>