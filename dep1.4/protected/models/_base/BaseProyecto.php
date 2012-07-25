<?php

/**
 * This is the model base class for the table "proyecto".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Proyecto".
 *
 * Columns in table "proyecto" available as properties of the model,
 * followed by relations of table "proyecto" available as properties of the model.
 *
 * @property integer $id
 * @property string $codigoProyecto
 * @property string $nombre
 * @property string $codigoBip
 * @property string $duracion
 * @property string $director
 * @property string $aporteFic
 * @property string $aporteUtaV
 * @property string $aporteUtaP
 * @property string $aporteUtaTotal
 * @property string $aportesOtros
 * @property string $montoProyecto
 * @property double $aporteFicAnt
 * @property double $porcAporteFic
 * @property double $porcAporteVal
 * @property double $porcAportePec
 * @property double $porcAporteExt
 *
 * @property Constancia[] $constancias
 * @property Plantilla[] $plantillas
 * @property Subitem[] $subitems
 */
abstract class BaseProyecto extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'proyecto';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Proyecto|Proyectos', $n);
	}

	public static function representingColumn() {
		return 'codigoProyecto';
	}

	public function rules() {
		return array(
			array('aporteFicAnt, porcAporteFic, porcAporteVal, porcAportePec, porcAporteExt', 'numerical'),
			array('codigoProyecto, codigoBip, duracion, director, aporteFic, aporteUtaV, aporteUtaP, aporteUtaTotal, aportesOtros, montoProyecto', 'length', 'max'=>45),
			array('nombre', 'length', 'max'=>200),
			array('codigoProyecto, nombre, codigoBip, duracion, director, aporteFic, aporteUtaV, aporteUtaP, aporteUtaTotal, aportesOtros, montoProyecto, aporteFicAnt, porcAporteFic, porcAporteVal, porcAportePec, porcAporteExt', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, codigoProyecto, nombre, codigoBip, duracion, director, aporteFic, aporteUtaV, aporteUtaP, aporteUtaTotal, aportesOtros, montoProyecto, aporteFicAnt, porcAporteFic, porcAporteVal, porcAportePec, porcAporteExt', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'constancias' => array(self::HAS_MANY, 'Constancia', 'proyecto_id'),
			'plantillas' => array(self::HAS_MANY, 'Plantilla', 'proyecto_id'),
			'subitems' => array(self::HAS_MANY, 'Subitem', 'proyecto_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'codigoProyecto' => Yii::t('app', 'Codigo Proyecto'),
			'nombre' => Yii::t('app', 'Nombre'),
			'codigoBip' => Yii::t('app', 'Codigo Bip'),
			'duracion' => Yii::t('app', 'Duracion'),
			'director' => Yii::t('app', 'Director'),
			'aporteFic' => Yii::t('app', 'Aporte Fic'),
			'aporteUtaV' => Yii::t('app', 'Aporte Uta V'),
			'aporteUtaP' => Yii::t('app', 'Aporte Uta P'),
			'aporteUtaTotal' => Yii::t('app', 'Aporte Uta Total'),
			'aportesOtros' => Yii::t('app', 'Aportes Otros'),
			'montoProyecto' => Yii::t('app', 'Monto Proyecto'),
			'aporteFicAnt' => Yii::t('app', 'Aporte Fic Ant'),
			'porcAporteFic' => Yii::t('app', 'Porc Aporte Fic'),
			'porcAporteVal' => Yii::t('app', 'Porc Aporte Val'),
			'porcAportePec' => Yii::t('app', 'Porc Aporte Pec'),
			'porcAporteExt' => Yii::t('app', 'Porc Aporte Ext'),
			'constancias' => null,
			'plantillas' => null,
			'subitems' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('codigoProyecto', $this->codigoProyecto, true);
		$criteria->compare('nombre', $this->nombre, true);
		$criteria->compare('codigoBip', $this->codigoBip, true);
		$criteria->compare('duracion', $this->duracion, true);
		$criteria->compare('director', $this->director, true);
		$criteria->compare('aporteFic', $this->aporteFic, true);
		$criteria->compare('aporteUtaV', $this->aporteUtaV, true);
		$criteria->compare('aporteUtaP', $this->aporteUtaP, true);
		$criteria->compare('aporteUtaTotal', $this->aporteUtaTotal, true);
		$criteria->compare('aportesOtros', $this->aportesOtros, true);
		$criteria->compare('montoProyecto', $this->montoProyecto, true);
		$criteria->compare('aporteFicAnt', $this->aporteFicAnt);
		$criteria->compare('porcAporteFic', $this->porcAporteFic);
		$criteria->compare('porcAporteVal', $this->porcAporteVal);
		$criteria->compare('porcAportePec', $this->porcAportePec);
		$criteria->compare('porcAporteExt', $this->porcAporteExt);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}