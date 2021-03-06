<?php

/**
 * This is the model base class for the table "resofcontratovaf".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Resofcontratovaf".
 *
 * Columns in table "resofcontratovaf" available as properties of the model,
 * followed by relations of table "resofcontratovaf" available as properties of the model.
 *
 * @property integer $id
 * @property integer $controlseguimiento_id
 * @property string $fechaCreacion
 * @property string $numRes
 * @property string $fechaNumRes
 * @property integer $alerta1
 * @property string $firma
 * @property string $fechaFirma
 * @property integer $alerta2
 *
 * @property Controlseguimiento $controlseguimiento
 */
abstract class BaseResofcontratovaf extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'resofcontratovaf';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Resofcontratovaf|Resofcontratovafs', $n);
	}

	public static function representingColumn() {
		return 'fechaCreacion';
	}

	public function rules() {
		return array(
			array('controlseguimiento_id, alerta1, alerta2', 'numerical', 'integerOnly'=>true),
			array('numRes, firma, fechaFirma', 'length', 'max'=>45),
			array('fechaCreacion, fechaNumRes', 'safe'),
			array('controlseguimiento_id, fechaCreacion, numRes, fechaNumRes, alerta1, firma, fechaFirma, alerta2', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, controlseguimiento_id, fechaCreacion, numRes, fechaNumRes, alerta1, firma, fechaFirma, alerta2', 'safe', 'on'=>'search'),
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
			'fechaCreacion' => Yii::t('app', 'Fecha Creacion'),
			'numRes' => Yii::t('app', 'Num Res'),
			'fechaNumRes' => Yii::t('app', 'Fecha Num Res'),
			'alerta1' => Yii::t('app', 'Alerta1'),
			'firma' => Yii::t('app', 'Firma'),
			'fechaFirma' => Yii::t('app', 'Fecha Firma'),
			'alerta2' => Yii::t('app', 'Alerta2'),
			'controlseguimiento' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('controlseguimiento_id', $this->controlseguimiento_id);
		$criteria->compare('fechaCreacion', $this->fechaCreacion, true);
		$criteria->compare('numRes', $this->numRes, true);
		$criteria->compare('fechaNumRes', $this->fechaNumRes, true);
		$criteria->compare('alerta1', $this->alerta1);
		$criteria->compare('firma', $this->firma, true);
		$criteria->compare('fechaFirma', $this->fechaFirma, true);
		$criteria->compare('alerta2', $this->alerta2);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}