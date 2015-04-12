<?php
/* @var $this HabitacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Habitaciones',
);

$this->menu=array(
	array('label'=>'Create Habitaciones', 'url'=>array('create')),
	array('label'=>'Manage Habitaciones', 'url'=>array('admin')),
);
?>

<h1>Habitaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
