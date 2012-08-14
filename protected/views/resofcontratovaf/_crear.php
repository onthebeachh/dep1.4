<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'resofcontratovaf-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>
		<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numRes'); ?>
		<?php echo $form->textField($model, 'numRes', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numRes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaNumRes'); ?>
		<?php echo $form->textField($model, 'fechaNumRes'); ?>
		<?php echo $form->error($model,'fechaNumRes'); ?>
		</div><!-- row -->

		<div class="row">
		<?php echo $form->labelEx($model,'firma'); ?>
		<?php echo $form->textField($model, 'firma', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'firma'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaFirma'); ?>
		<?php echo $form->textField($model, 'fechaFirma', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'fechaFirma'); ?>
		</div><!-- row -->



<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->