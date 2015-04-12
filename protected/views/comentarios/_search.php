<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_coment'); ?>
		<?php echo $form->textField($model,'cod_coment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentario'); ?>
		<?php echo $form->textField($model,'comentario',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puntuacion'); ?>
		<?php echo $form->textField($model,'puntuacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usercoment'); ?>
		<?php echo $form->textField($model,'id_usercoment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->