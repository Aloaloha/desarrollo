<?php
/* @var $this PropietariosController */
/* @var $model Propietarios */

$this->breadcrumbs=array(
	'Propietarioses'=>array('index'),
	$model->cod_prop=>array('view','id'=>$model->cod_prop),
	'Update',
);

$this->menu=array(
	array('label'=>'List Propietarios', 'url'=>array('index')),
	array('label'=>'Create Propietarios', 'url'=>array('create')),
	array('label'=>'View Propietarios', 'url'=>array('view', 'id'=>$model->cod_prop)),
	array('label'=>'Manage Propietarios', 'url'=>array('admin')),
);
?>

<h1>Update Propietarios <?php echo $model->cod_prop; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>