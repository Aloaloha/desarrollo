<?php
/* @var $this EstablecimientoController */
/* @var $data Establecimiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_est')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_est), array('view', 'id'=>$data->cod_est)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonsocial')); ?>:</b>
	<?php echo CHtml::encode($data->razonsocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cif')); ?>:</b>
	<?php echo CHtml::encode($data->cif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dir')); ?>:</b>
	<?php echo CHtml::encode($data->dir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidad')); ?>:</b>
	<?php echo CHtml::encode($data->localidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telf')); ?>:</b>
	<?php echo CHtml::encode($data->telf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpostal')); ?>:</b>
	<?php echo CHtml::encode($data->cpostal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CC')); ?>:</b>
	<?php echo CHtml::encode($data->CC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona')); ?>:</b>
	<?php echo CHtml::encode($data->zona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />

	*/ ?>

</div>