<?php
/* @var $this EstablecimientoController */
/* @var $model Establecimiento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_est'); ?>
		<?php echo $form->textField($model,'cod_est'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'razonsocial'); ?>
		<?php echo $form->textField($model,'razonsocial',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cif'); ?>
		<?php echo $form->textField($model,'cif',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dir'); ?>
		<?php echo $form->textField($model,'dir',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'localidad'); ?>
		<?php echo $form->textField($model,'localidad',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telf'); ?>
		<?php echo $form->textField($model,'telf',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpostal'); ?>
		<?php echo $form->textField($model,'cpostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CC'); ?>
		<?php echo $form->textField($model,'CC',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona'); ?>
		<?php echo $form->textField($model,'zona',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img'); ?>
		<?php echo $form->textField($model,'img'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->