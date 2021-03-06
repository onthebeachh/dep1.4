<?php

class OficioconductorController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Oficioconductor'),
		));
	}

	public function actionCreate() {
		$model = new Oficioconductor;


		if (isset($_POST['Oficioconductor'])) {
			$model->setAttributes($_POST['Oficioconductor']);

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
		$model = $this->loadModel($id, 'Oficioconductor');


		if (isset($_POST['Oficioconductor'])) {
			$model->setAttributes($_POST['Oficioconductor']);

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
			$this->loadModel($id, 'Oficioconductor')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Oficioconductor');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Oficioconductor('search');
		$model->unsetAttributes();

		if (isset($_GET['Oficioconductor']))
			$model->setAttributes($_GET['Oficioconductor']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}