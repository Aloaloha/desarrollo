<?php
/* @var $this ComentariosController */
/* @var $data Comentarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_coment')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_coment), array('view', 'id'=>$data->cod_coment)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puntuacion')); ?>:</b>
	<?php echo CHtml::encode($data->puntuacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usercoment')); ?>:</b>
	<?php echo CHtml::encode($data->id_usercoment); ?>
	<br />


</div>