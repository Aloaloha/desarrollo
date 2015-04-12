<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comentario'); ?>
		<?php echo $form->textField($model,'comentario',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'puntuacion'); ?>
		<?php echo $form->textField($model,'puntuacion'); ?>
		<?php echo $form->error($model,'puntuacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usercoment'); ?>
		<?php echo $form->textField($model,'id_usercoment'); ?>
		<?php echo $form->error($model,'id_usercoment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->