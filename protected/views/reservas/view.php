<?php
/* @var $this ReservasController */
/* @var $model Reservas */

$this->breadcrumbs=array(
	'Reservases'=>array('index'),
	$model->cod_fecha,
);

$this->menu=array(
	array('label'=>'List Reservas', 'url'=>array('index')),
	array('label'=>'Create Reservas', 'url'=>array('create')),
	array('label'=>'Update Reservas', 'url'=>array('update', 'id'=>$model->cod_fecha)),
	array('label'=>'Delete Reservas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_fecha),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reservas', 'url'=>array('admin')),
);
?>

<h1>View Reservas #<?php echo $model->cod_fecha; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_fecha',
		'fecha_ent',
		'fecha_sal',
		'fecha_reserva',
		'cod_userReserva',
		'cod_estReserva',
	),
)); ?>
