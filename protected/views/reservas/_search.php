<?php
/* @var $this ReservasController */
/* @var $model Reservas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_fecha'); ?>
		<?php echo $form->textField($model,'cod_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_ent'); ?>
		<?php echo $form->textField($model,'fecha_ent',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_sal'); ?>
		<?php echo $form->textField($model,'fecha_sal',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_reserva'); ?>
		<?php echo $form->textField($model,'fecha_reserva',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_userReserva'); ?>
		<?php echo $form->textField($model,'cod_userReserva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_estReserva'); ?>
		<?php echo $form->textField($model,'cod_estReserva'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->