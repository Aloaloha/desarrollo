<?php
/* @var $this PropietariosController */
/* @var $data Propietarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_prop')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_prop), array('view', 'id'=>$data->cod_prop)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_userProp')); ?>:</b>
	<?php echo CHtml::encode($data->cod_userProp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_esta')); ?>:</b>
	<?php echo CHtml::encode($data->cod_esta); ?>
	<br />


</div>