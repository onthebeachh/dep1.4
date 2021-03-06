<?php

class ControlseguimientoController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Controlseguimiento'),
		));
	}

	public function actionCreaCS($id){
	
		$model = new Controlseguimiento;
		if(isset($_POST['Controlseguimiento'])){
			$model->attributes=$_POST['Controlseguimiento'];	
			$model->procesocompra_id=$id;	
		
			if ($model->save(true)){	
				/*$this->PCService->asignarTipo($model);
				$ServiceName=$model->tipo.'Services';
				$this->PCService= new $ServiceName;		
				$this->PCService->asignarEtapas($model);*/		
				$this->redirect(array('view', 'id' => $model->id));
			}
		}
		
		if(Yii::app()->request->isAjaxRequest)
		{
			echo CJSON::encode(array('_form'=>$this->renderPartial('_form', array('model' => $model,'model_procesocompra'=>$this->loadModel($id, 'Procesocompra')),true,true),));
			exit;
		}
		
	}
	
	public function actionCreate() {
		$model = new Controlseguimiento;


		if (isset($_POST['Controlseguimiento'])) {
			$model->setAttributes($_POST['Controlseguimiento']);

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
		$model = $this->loadModel($id, 'Controlseguimiento');


		if (isset($_POST['Controlseguimiento'])) {
			$model->setAttributes($_POST['Controlseguimiento']);

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
			$this->loadModel($id, 'Controlseguimiento')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Controlseguimiento');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Controlseguimiento('search');
		$model->unsetAttributes();

		if (isset($_GET['Controlseguimiento']))
			$model->setAttributes($_GET['Controlseguimiento']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	
	public function actionAdminRendicion() {
		$model = new Controlseguimiento('search');
		$model->unsetAttributes();

		if (isset($_GET['Controlseguimiento']))
			$model->setAttributes($_GET['Controlseguimiento']);

		$this->render('adminRendicion', array(
			'model' => $model,
		));
	}

}