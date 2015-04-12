<?php
/* @var $this PropietariosController */
/* @var $model Propietarios */

$this->breadcrumbs=array(
	'Propietarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Propietarios', 'url'=>array('index')),
	array('label'=>'Manage Propietarios', 'url'=>array('admin')),
);
?>

<h1>Create Propietarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>