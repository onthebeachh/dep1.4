<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'resolucionoficializada-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'fechaEnvioRes'); ?>
		<?php echo $form->textField($model, 'fechaEnvioRes'); ?>
		<?php echo $form->error($model,'fechaEnvioRes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model, 'observacion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->