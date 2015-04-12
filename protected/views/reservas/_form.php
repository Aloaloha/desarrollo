<?php
/* @var $this ReservasController */
/* @var $model Reservas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ent'); ?>
		<?php echo $form->textField($model,'fecha_ent',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fecha_ent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_sal'); ?>
		<?php echo $form->textField($model,'fecha_sal',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fecha_sal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_reserva'); ?>
		<?php echo $form->textField($model,'fecha_reserva',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fecha_reserva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_userReserva'); ?>
		<?php echo $form->textField($model,'cod_userReserva'); ?>
		<?php echo $form->error($model,'cod_userReserva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_estReserva'); ?>
		<?php echo $form->textField($model,'cod_estReserva'); ?>
		<?php echo $form->error($model,'cod_estReserva'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->