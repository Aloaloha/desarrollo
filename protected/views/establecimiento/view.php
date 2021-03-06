<?php
/* @var $this EstablecimientoController */
/* @var $model Establecimiento */

$this->breadcrumbs=array(
	'Establecimientos'=>array('index'),
	$model->cod_est,
);

$this->menu=array(
	array('label'=>'List Establecimiento', 'url'=>array('index')),
	array('label'=>'Create Establecimiento', 'url'=>array('create')),
	array('label'=>'Update Establecimiento', 'url'=>array('update', 'id'=>$model->cod_est)),
	array('label'=>'Delete Establecimiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_est),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Establecimiento', 'url'=>array('admin')),
);
?>

<h1>View Establecimiento #<?php echo $model->cod_est; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_est',
		'razonsocial',
		'cif',
		'dir',
		'localidad',
		'telf',
		'cpostal',
		'CC',
		'email',
		'zona',
		'img',
	),
)); ?>
