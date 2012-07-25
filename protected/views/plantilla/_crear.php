<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'plantilla-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tipoDocumento'); ?>
		<?php echo $form->textField($model, 'tipoDocumento', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipoDocumento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numDocumento'); ?>
		<?php echo $form->textField($model, 'numDocumento', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numDocumento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numComprobanteEI'); ?>
		<?php echo $form->textField($model, 'numComprobanteEI', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numComprobanteEI'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaEI'); ?>
		<?php echo $form->textField($model, 'fechaEI'); ?>
		<?php echo $form->error($model,'fechaEI'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipoDocumentoFB'); ?>
		<?php echo $form->textField($model, 'tipoDocumentoFB', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipoDocumentoFB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numDocumentoFB'); ?>
		<?php echo $form->textField($model, 'numDocumentoFB', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numDocumentoFB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rutProveedor'); ?>
		<?php echo $form->textField($model, 'rutProveedor', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'rutProveedor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaEmisionDoc'); ?>
		<?php echo $form->textField($model, 'fechaEmisionDoc'); ?>
		<?php echo $form->error($model,'fechaEmisionDoc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaCancelacionDoc'); ?>
		<?php echo $form->textField($model, 'fechaCancelacionDoc'); ?>
		<?php echo $form->error($model,'fechaCancelacionDoc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'detalleDoc'); ?>
		<?php echo $form->textField($model, 'detalleDoc', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'detalleDoc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'valorTotal'); ?>
		<?php echo $form->textField($model, 'valorTotal', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'valorTotal'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model, 'observacion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->