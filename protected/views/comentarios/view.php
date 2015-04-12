<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs=array(
	'Comentarioses'=>array('index'),
	$model->cod_coment,
);

$this->menu=array(
	array('label'=>'List Comentarios', 'url'=>array('index')),
	array('label'=>'Create Comentarios', 'url'=>array('create')),
	array('label'=>'Update Comentarios', 'url'=>array('update', 'id'=>$model->cod_coment)),
	array('label'=>'Delete Comentarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_coment),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comentarios', 'url'=>array('admin')),
);
?>

<h1>View Comentarios #<?php echo $model->cod_coment; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_coment',
		'fecha',
		'comentario',
		'puntuacion',
		'id_usercoment',
	),
)); ?>
