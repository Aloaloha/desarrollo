<?php
/* @var $this ReservasController */
/* @var $data Reservas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_fecha')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_fecha), array('view', 'id'=>$data->cod_fecha)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ent')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_sal')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_sal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_reserva')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_reserva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_userReserva')); ?>:</b>
	<?php echo CHtml::encode($data->cod_userReserva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_estReserva')); ?>:</b>
	<?php echo CHtml::encode($data->cod_estReserva); ?>
	<br />


</div>