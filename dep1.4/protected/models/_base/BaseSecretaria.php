<?php

/**
 * This is the model base class for the table "secretaria".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Secretaria".
 *
 * Columns in table "secretaria" available as properties of the model,
 * followed by relations of table "secretaria" available as properties of the model.
 *
 * @property integer $id
 * @property integer $controlseguimiento_id
 * @property string $tipo
 * @property string $estado
 * @property string $fechaCreacion
 * @property string $fechaRespuesta
 * @property string $observacion
 * @property integer $alerta1
 * @property integer $alerta2
 *
 * @property Controlseguimiento $controlseguimiento
 */
abstract class BaseSecretaria extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'secretaria';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Secretaria|Secretarias', $n);
	}

	public static function representingColumn() {
		return 'tipo';
	}

	public function rules() {
		return array(
			array('controlseguimiento_id, alerta1, alerta2', 'numerical', 'integerOnly'=>true),
			array('tipo, estado', 'length', 'max'=>45),
			array('observacion', 'length', 'max'=>200),
			array('fechaCreacion, fechaRespuesta', 'safe'),
			array('controlseguimiento_id, tipo, estado, fechaCreacion, fechaRespuesta, observacion, alerta1, alerta2', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, controlseguimiento_id, tipo, estado, fechaCreacion, fechaRespuesta, observacion, alerta1, alerta2', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'controlseguimiento' => array(self::BELONGS_TO, 'Controlseguimiento', 'controlseguimiento_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'controlseguimiento_id' => null,
			'tipo' => Yii::t('app', 'Tipo'),
			'estado' => Yii::t('app', 'Estado'),
			'fechaCreacion' => Yii::t('app', 'Fecha Creacion'),
			'fechaRespuesta' => Yii::t('app', 'Fecha Respuesta'),
			'observacion' => Yii::t('app', 'Observacion'),
			'alerta1' => Yii::t('app', 'Alerta1'),
			'alerta2' => Yii::t('app', 'Alerta2'),
			'controlseguimiento' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('controlseguimiento_id', $this->controlseguimiento_id);
		$criteria->compare('tipo', $this->tipo, true);
		$criteria->compare('estado', $this->estado, true);
		$criteria->compare('fechaCreacion', $this->fechaCreacion, true);
		$criteria->compare('fechaRespuesta', $this->fechaRespuesta, true);
		$criteria->compare('observacion', $this->observacion, true);
		$criteria->compare('alerta1', $this->alerta1);
		$criteria->compare('alerta2', $this->alerta2);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}