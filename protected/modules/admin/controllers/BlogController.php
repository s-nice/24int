<?php

class BlogController extends AdminBase
{

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Blog;
		$catelist = Category::getDropList(1);
		$model->orderid=1;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Blog']))
		{
			$model->attributes=$_POST['Blog'];
			$model->create_uid=Yii::app()->user->id;
			$model->create_time=time();
			
			$img =  CUploadedFile::getInstance($model,'img');
			if($img){
				$savename = Yii::app()->params['uploadPath'].time().mt_rand(1,999).'.'.$img->extensionName;
				$model->img='/'.$savename;
				if($model->validate()){
					$img->saveAs($savename);
				}
			}
			
			if($model->save()){
				Yii::app()->user->setFlash('success','信息提交成功！');
			}else{
				Yii::app()->user->setFlash('success','信息提交失败！');
			}
		}
		$this->render('create',array(
			'model'=>$model,
			'catelist'=>$catelist,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$catelist = Category::getDropList(1);

		if(isset($_POST['Blog']))
		{
			$model->attributes=$_POST['Blog'];
			
			$img =  CUploadedFile::getInstance($model,'img');
			if($img){
				$savename = Yii::app()->params['uploadPath'].time().mt_rand(1,999).'.'.$img->extensionName;
				$model->img='/'.$savename;
				if($model->validate()){
					$img->saveAs($savename);
				}
				if (file_exists($oldimg)) {
					unlink($oldimg);
				}
			}
			
			if($model->save()){
				Yii::app()->user->setFlash('success','信息提交成功！');
			}else{
				Yii::app()->user->setFlash('success','信息提交失败！');
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'catelist'=>$catelist,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Blog');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Blog('search');
		$catelist=array();
		$catelist[0]='全部';
		$catelist = $catelist+Category::getDropList(1);
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Blog']))
			$model->attributes=$_GET['Blog'];

		if($model->pid==0){
			$model->pid='';
		}
		
		$this->render('admin',array(
			'model'=>$model,
			'catelist'=>$catelist,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Blog the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Blog::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Blog $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='blog-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
