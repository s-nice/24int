<?php

/**
 * @author
 */
class ElfinderController extends AdminBase {

	public function actions() {
		return array(
			'connector' => array(
				'class' => 'ext.elFinder.ElFinderConnectorAction',
				'settings' => array(
					'root' => Yii::getPathOfAlias('webroot') . '/upload/',
					'URL' => Yii::app()->baseUrl . '/upload/',
					'rootAlias' => 'Home',
					'mimeDetect' => 'none'
				)
			),
		);
	}

	public function actionAdmin() {
		$this->render('admin');
	}

	public function actionView() {
		$this->renderPartial('view', array(), false, true);
	}

}
