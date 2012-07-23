<?php

/**
 * This is the model base class for the table "solicitudcompra".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Solicitudcompra".
 *
 * Columns in table "solicitudcompra" available as properties of the model,
 * followed by relations of table "solicitudcompra" available as properties of the model.
 *
 * @property integer $id
 * @property integer $procesocompra_id
 * @property integer $numSolicitud
 * @property string $fecha
 * @property string $descripcion
 * @property string $monto
 * @property string $saldo
 * @property string $fechaFirma
 * @property integer $itemAntiguo
 * @property integer $itemNuevo
 * @property string $estado
 * @property string $fechaEstado
 * @property string $observacion
 *
 * @property Procesocompra $procesocompra
 */
abstract class BaseSolicitudcompra extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'solicitudcompra';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Solicitudcompra|Solicitudcompras', $n);
	}

	public static function representingColumn() {
		return 'fecha';
	}

	public function rules() {
		return array(
			array('procesocompra_id, numSolicitud, itemAntiguo, itemNuevo', 'numerical', 'integerOnly'=>true),
			array('descripcion, observacion', 'length', 'max'=>200),
			array('monto, saldo, estado', 'length', 'max'=>45),
			array('fecha, fechaFirma, fechaEstado', 'safe'),
			array('procesocompra_id, numSolicitud, fecha, descripcion, monto, saldo, fechaFirma, itemAntiguo, itemNuevo, estado, fechaEstado, observacion', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, procesocompra_id, numSolicitud, fecha, descripcion, monto, saldo, fechaFirma, itemAntiguo, itemNuevo, estado, fechaEstado, observacion', 'safe', 'on'=>'search'),
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
			'numSolicitud' => Yii::t('app', 'Num Solicitud'),
			'fecha' => Yii::t('app', 'Fecha'),
			'descripcion' => Yii::t('app', 'Descripcion'),
			'monto' => Yii::t('app', 'Monto'),
			'saldo' => Yii::t('app', 'Saldo'),
			'fechaFirma' => Yii::t('app', 'Fecha Firma'),
			'itemAntiguo' => Yii::t('app', 'Item Antiguo'),
			'itemNuevo' => Yii::t('app', 'Item Nuevo'),
			'estado' => Yii::t('app', 'Estado'),
			'fechaEstado' => Yii::t('app', 'Fecha Estado'),
			'observacion' => Yii::t('app', 'Observacion'),
			'procesocompra' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('procesocompra_id', $this->procesocompra_id);
		$criteria->compare('numSolicitud', $this->numSolicitud);
		$criteria->compare('fecha', $this->fecha, true);
		$criteria->compare('descripcion', $this->descripcion, true);
		$criteria->compare('monto', $this->monto, true);
		$criteria->compare('saldo', $this->saldo, true);
		$criteria->compare('fechaFirma', $this->fechaFirma, true);
		$criteria->compare('itemAntiguo', $this->itemAntiguo);
		$criteria->compare('itemNuevo', $this->itemNuevo);
		$criteria->compare('estado', $this->estado, true);
		$criteria->compare('fechaEstado', $this->fechaEstado, true);
		$criteria->compare('observacion', $this->observacion, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}