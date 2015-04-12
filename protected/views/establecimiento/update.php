<?php
/* @var $this EstablecimientoController */
/* @var $model Establecimiento */

$this->breadcrumbs=array(
	'Establecimientos'=>array('index'),
	$model->cod_est=>array('view','id'=>$model->cod_est),
	'Update',
);

$this->menu=array(
	array('label'=>'List Establecimiento', 'url'=>array('index')),
	array('label'=>'Create Establecimiento', 'url'=>array('create')),
	array('label'=>'View Establecimiento', 'url'=>array('view', 'id'=>$model->cod_est)),
	array('label'=>'Manage Establecimiento', 'url'=>array('admin')),
);
?>

<h1>Update Establecimiento <?php echo $model->cod_est; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>