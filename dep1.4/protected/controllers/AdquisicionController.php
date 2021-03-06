<?php

class AdquisicionController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Adquisicion'),
		));
	}

	public function actionCrear($id){
		$model = new Adquisicion;
		$model_pc = $this->loadModel($id, 'Procesocompra');
		
		if (isset($_POST['Adquisicion'])){
			$model->setAttributes($_POST['Adquisicion']);			
			if ($model->save()){
				if (Yii::app()->request->isAjaxRequest){
				        echo CJSON::encode(array(
                        'status'=>'success', 
                        'div'=>"LISTA",
                        ));
                    exit;               
                }
			}			
		}		
		if (Yii::app()->request->isAjaxRequest)
        {
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_formA', array('model' => $model,'model_pc' => $model_pc,'buttons' => 'create'),true)));
            exit;               
        }
	}
	
	public function actionCreate() {
		$model = new Adquisicion;


		if (isset($_POST['Adquisicion'])) {
			$model->setAttributes($_POST['Adquisicion']);

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
		$model = $this->loadModel($id, 'Adquisicion');


		if (isset($_POST['Adquisicion'])) {
			$model->setAttributes($_POST['Adquisicion']);

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
			$this->loadModel($id, 'Adquisicion')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Adquisicion');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Adquisicion('search');
		$model->unsetAttributes();

		if (isset($_GET['Adquisicion']))
			$model->setAttributes($_GET['Adquisicion']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}