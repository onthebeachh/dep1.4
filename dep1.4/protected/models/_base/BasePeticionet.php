<?php

/**
 * This is the model base class for the table "peticionet".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Peticionet".
 *
 * Columns in table "peticionet" available as properties of the model,
 * followed by relations of table "peticionet" available as properties of the model.
 *
 * @property integer $id
 * @property integer $procesocompra_id
 * @property string $fecha
 * @property string $observacion
 * @property string $estado
 *
 * @property Procesocompra $procesocompra
 */
abstract class BasePeticionet extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'peticionet';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Peticionet|Peticionets', $n);
	}

	public static function representingColumn() {
		return 'fecha';
	}

	public function rules() {
		return array(
			array('procesocompra_id', 'numerical', 'integerOnly'=>true),
			array('observacion', 'length', 'max'=>200),
			array('estado', 'length', 'max'=>45),
			array('fecha', 'safe'),
			array('procesocompra_id, fecha, observacion, estado', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, procesocompra_id, fecha, observacion, estado', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'procesocompra' => array(self::BELONGS_TO, 'Procesocompra', 'procesocompra_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'procesocompra_id' => null,
			'fecha' => Yii::t('app', 'Fecha'),
			'observacion' => Yii::t('app', 'Observacion'),
			'estado' => Yii::t('app', 'Estado'),
			'procesocompra' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('procesocompra_id', $this->procesocompra_id);
		$criteria->compare('fecha', $this->fecha, true);
		$criteria->compare('observacion', $this->observacion, true);
		$criteria->compare('estado', $this->estado, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}