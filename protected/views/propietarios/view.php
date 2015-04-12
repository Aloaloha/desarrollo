<?php
/* @var $this PropietariosController */
/* @var $model Propietarios */

$this->breadcrumbs=array(
	'Propietarioses'=>array('index'),
	$model->cod_prop,
);

$this->menu=array(
	array('label'=>'List Propietarios', 'url'=>array('index')),
	array('label'=>'Create Propietarios', 'url'=>array('create')),
	array('label'=>'Update Propietarios', 'url'=>array('update', 'id'=>$model->cod_prop)),
	array('label'=>'Delete Propietarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_prop),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Propietarios', 'url'=>array('admin')),
);
?>

<h1>View Propietarios #<?php echo $model->cod_prop; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_prop',
		'cod_userProp',
		'cod_esta',
	),
)); ?>
