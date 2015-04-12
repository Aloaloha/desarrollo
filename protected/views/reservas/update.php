<?php
/* @var $this ReservasController */
/* @var $model Reservas */

$this->breadcrumbs=array(
	'Reservases'=>array('index'),
	$model->cod_fecha=>array('view','id'=>$model->cod_fecha),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reservas', 'url'=>array('index')),
	array('label'=>'Create Reservas', 'url'=>array('create')),
	array('label'=>'View Reservas', 'url'=>array('view', 'id'=>$model->cod_fecha)),
	array('label'=>'Manage Reservas', 'url'=>array('admin')),
);
?>

<h1>Update Reservas <?php echo $model->cod_fecha; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>