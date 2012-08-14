<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'recinformacionsup-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'boletayotros'); ?>
		<?php echo $form->textField($model, 'boletayotros', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'boletayotros'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha1'); ?>
		<?php echo $form->textField($model, 'fecha1'); ?>
		<?php echo $form->error($model,'fecha1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model, 'observacion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'envioantecedentes'); ?>
		<?php echo $form->textField($model, 'envioantecedentes', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'envioantecedentes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha2'); ?>
		<?php echo $form->textField($model, 'fecha2'); ?>
		<?php echo $form->error($model,'fecha2'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->