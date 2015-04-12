<?php
/* @var $this PropietariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propietarioses',
);

$this->menu=array(
	array('label'=>'Create Propietarios', 'url'=>array('create')),
	array('label'=>'Manage Propietarios', 'url'=>array('admin')),
);
?>

<h1>Propietarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
