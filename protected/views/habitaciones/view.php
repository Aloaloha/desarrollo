<?php
/* @var $this HabitacionesController */
/* @var $model Habitaciones */

$this->breadcrumbs=array(
	'Habitaciones'=>array('index'),
	$model->cod_hab,
);

$this->menu=array(
	array('label'=>'List Habitaciones', 'url'=>array('index')),
	array('label'=>'Create Habitaciones', 'url'=>array('create')),
	array('label'=>'Update Habitaciones', 'url'=>array('update', 'id'=>$model->cod_hab)),
	array('label'=>'Delete Habitaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_hab),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Habitaciones', 'url'=>array('admin')),
);
?>

<h1>View Habitaciones #<?php echo $model->cod_hab; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_hab',
		'tipo',
		'numero',
		'estado',
		'precio',
		'imagenes',
		'cod_estPerten',
	),
)); ?>
