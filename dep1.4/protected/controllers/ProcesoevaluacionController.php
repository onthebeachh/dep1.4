<?php

class ProcesoevaluacionController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Procesoevaluacion'),
		));
	}

	public function actionCreate() {
		$model = new Procesoevaluacion;


		if (isset($_POST['Procesoevaluacion'])) {
			$model->setAttributes($_POST['Procesoevaluacion']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Procesoevaluacion');


		if (isset($_POST['Procesoevaluacion'])) {
			$model->setAttributes($_POST['Procesoevaluacion']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Procesoevaluacion')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Procesoevaluacion');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Procesoevaluacion('search');
		$model->unsetAttributes();

		if (isset($_GET['Procesoevaluacion']))
			$model->setAttributes($_GET['Procesoevaluacion']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}