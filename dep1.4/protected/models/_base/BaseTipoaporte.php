<?php

/**
 * This is the model base class for the table "tipoaporte".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Tipoaporte".
 *
 * Columns in table "tipoaporte" available as properties of the model,
 * followed by relations of table "tipoaporte" available as properties of the model.
 *
 * @property integer $id
 * @property string $codigo
 * @property string $sigla
 * @property string $nombre
 *
 * @property Centrocosto[] $centrocostos
 * @property Subitem[] $subitems
 */
abstract class BaseTipoaporte extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tipoaporte';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Tipoaporte|Tipoaportes', $n);
	}

	public static function representingColumn() {
		return 'codigo';
	}

	public function rules() {
		return array(
			array('codigo, sigla', 'length', 'max'=>45),
			array('nombre', 'length', 'max'=>100),
			array('codigo, sigla, nombre', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, codigo, sigla, nombre', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'centrocostos' => array(self::HAS_MANY, 'Centrocosto', 'tipoaporte_id'),
			'subitems' => array(self::HAS_MANY, 'Subitem', 'tipoaporte_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'codigo' => Yii::t('app', 'Codigo'),
			'sigla' => Yii::t('app', 'Sigla'),
			'nombre' => Yii::t('app', 'Nombre'),
			'centrocostos' => null,
			'subitems' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('codigo', $this->codigo, true);
		$criteria->compare('sigla', $this->sigla, true);
		$criteria->compare('nombre', $this->nombre, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}