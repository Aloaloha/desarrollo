<?php
/* @var $this HabitacionesController */
/* @var $model Habitaciones */

$this->breadcrumbs=array(
	'Habitaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Habitaciones', 'url'=>array('index')),
	array('label'=>'Manage Habitaciones', 'url'=>array('admin')),
);
?>

<h1>Create Habitaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>