<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'subitem_id'); ?>
		<?php echo $form->dropDownList($model, 'subitem_id', GxHtml::listDataEx(Subitem::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'sigla'); ?>
		<?php echo $form->textField($model, 'sigla', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'caracteristicas'); ?>
		<?php echo $form->textField($model, 'caracteristicas', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'estado'); ?>
		<?php echo $form->textField($model, 'estado', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaBL'); ?>
		<?php echo $form->textField($model, 'fechaBL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'idBL'); ?>
		<?php echo $form->textField($model, 'idBL', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaTD'); ?>
		<?php echo $form->textField($model, 'fechaTD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numeroidTD'); ?>
		<?php echo $form->textField($model, 'numeroidTD', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'observacionTD'); ?>
		<?php echo $form->textField($model, 'observacionTD', array('maxlength' => 200)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Buscar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
