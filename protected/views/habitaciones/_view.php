<?php
/* @var $this HabitacionesController */
/* @var $data Habitaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_hab')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_hab), array('view', 'id'=>$data->cod_hab)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagenes')); ?>:</b>
	<?php echo CHtml::encode($data->imagenes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_estPerten')); ?>:</b>
	<?php echo CHtml::encode($data->cod_estPerten); ?>
	<br />


</div>