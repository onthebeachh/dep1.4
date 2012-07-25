<?php

/**
 * This is the model base class for the table "resolucionof".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Resolucionof".
 *
 * Columns in table "resolucionof" available as properties of the model,
 * followed by relations of table "resolucionof" available as properties of the model.
 *
 * @property integer $id
 * @property integer $controlseguimiento_id
 * @property string $tipo
 * @property string $numResolucionFirmada
 * @property string $fechaCreacion
 * @property string $fechaEntregaRes
 * @property string $observacion
 * @property integer $alerta
 *
 * @property Controlseguimiento $controlseguimiento
 */
abstract class BaseResolucionof extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'resolucionof';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Resolucionof|Resolucionofs', $n);
	}

	public static function representingColumn() {
		return 'tipo';
	}

	public function rules() {
		return array(
			array('controlseguimiento_id, alerta', 'numerical', 'integerOnly'=>true),
			array('tipo, numResolucionFirmada', 'length', 'max'=>45),
			array('observacion', 'length', 'max'=>200),
			array('fechaCreacion, fechaEntregaRes', 'safe'),
			array('controlseguimiento_id, tipo, numResolucionFirmada, fechaCreacion, fechaEntregaRes, observacion, alerta', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, controlseguimiento_id, tipo, numResolucionFirmada, fechaCreacion, fechaEntregaRes, observacion, alerta', 'safe', 'on'=>'search'),
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
			'numResolucionFirmada' => Yii::t('app', 'Num Resolucion Firmada'),
			'fechaCreacion' => Yii::t('app', 'Fecha Creacion'),
			'fechaEntregaRes' => Yii::t('app', 'Fecha Entrega Res'),
			'observacion' => Yii::t('app', 'Observacion'),
			'alerta' => Yii::t('app', 'Alerta'),
			'controlseguimiento' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('controlseguimiento_id', $this->controlseguimiento_id);
		$criteria->compare('tipo', $this->tipo, true);
		$criteria->compare('numResolucionFirmada', $this->numResolucionFirmada, true);
		$criteria->compare('fechaCreacion', $this->fechaCreacion, true);
		$criteria->compare('fechaEntregaRes', $this->fechaEntregaRes, true);
		$criteria->compare('observacion', $this->observacion, true);
		$criteria->compare('alerta', $this->alerta);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}