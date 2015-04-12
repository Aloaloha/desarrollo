<?php
/* @var $this EstablecimientoController */
/* @var $model Establecimiento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'establecimiento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'razonsocial'); ?>
		<?php echo $form->textField($model,'razonsocial',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'razonsocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cif'); ?>
		<?php echo $form->textField($model,'cif',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'cif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dir'); ?>
		<?php echo $form->textField($model,'dir',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'dir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidad'); ?>
		<?php echo $form->textField($model,'localidad',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'localidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telf'); ?>
		<?php echo $form->textField($model,'telf',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpostal'); ?>
		<?php echo $form->textField($model,'cpostal'); ?>
		<?php echo $form->error($model,'cpostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CC'); ?>
		<?php echo $form->textField($model,'CC',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'CC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona'); ?>
		<?php echo $form->textField($model,'zona',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'zona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img'); ?>
		<?php echo $form->textField($model,'img'); ?>
		<?php echo $form->error($model,'img'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->