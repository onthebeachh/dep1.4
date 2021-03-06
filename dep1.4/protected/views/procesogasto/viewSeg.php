<?php

$this->breadcrumbs = array(
	$model->label(2) => array('procesogasto/adminSeg'),
	GxHtml::valueEx($model),
);

?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'id',
		array(
				'name' => 'subitem',
				'type' => 'raw',
				'value' => $model->subitem !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->subitem)), array('subitem/view', 'id' => GxActiveRecord::extractPkValue($model->subitem, true))) : null,
				),
		'tipo',
		'nombre',
		'estado',
	),
)); 
?>

<br><br>
