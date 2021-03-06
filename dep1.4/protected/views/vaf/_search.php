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
		<?php echo $form->label($model, 'controlseguimiento_id'); ?>
		<?php echo $form->dropDownList($model, 'controlseguimiento_id', GxHtml::listDataEx(Controlseguimiento::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numResolucion'); ?>
		<?php echo $form->textField($model, 'numResolucion', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaRespuesta'); ?>
		<?php echo $form->textField($model, 'fechaRespuesta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'alerta'); ?>
		<?php echo $form->textField($model, 'alerta'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
