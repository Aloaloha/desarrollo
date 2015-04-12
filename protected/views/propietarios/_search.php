<?php
/* @var $this PropietariosController */
/* @var $model Propietarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_prop'); ?>
		<?php echo $form->textField($model,'cod_prop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_userProp'); ?>
		<?php echo $form->textField($model,'cod_userProp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_esta'); ?>
		<?php echo $form->textField($model,'cod_esta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->