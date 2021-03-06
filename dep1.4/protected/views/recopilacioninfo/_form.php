<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'recopilacioninfo-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'controlseguimiento_id'); ?>
		<?php echo $form->dropDownList($model, 'controlseguimiento_id', GxHtml::listDataEx(Controlseguimiento::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'controlseguimiento_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fase'); ?>
		<?php echo $form->textField($model, 'fase', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'fase'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha1'); ?>
		<?php echo $form->textField($model, 'fecha1'); ?>
		<?php echo $form->error($model,'fecha1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha2'); ?>
		<?php echo $form->textField($model, 'fecha2'); ?>
		<?php echo $form->error($model,'fecha2'); ?>
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