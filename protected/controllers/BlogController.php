<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BlogController
 *
 * @author Administrator
 */
class BlogController extends FrontBase {
	//put your code here
	
	public function actionIndex($pid=''){
		
		$model = new Blog();
		$criteria = new CDbCriteria();
		//排序
		$criteria->order = 'create_time DESC';
		
		//查询条件
		if($pid){
			$pid=intval($pid);
			$criteria->addCondition("pid=$pid and is_show=1");
		}else{
			$criteria->addCondition("is_show=1");
		}
		
		if(isset($_POST['keyword']) && $_POST['keyword']){
			$keyword=addslashes($_POST['keyword']);
			//$criteria->compare('title',$keyword,true);
			$criteria->addCondition("title like '%$keyword%' or content like '%$keyword%'");
		}
		
		//分页处理
		$count = $model->count($criteria);
		$page = new CPagination($count);
		$page->pageSize = 10;
		$page->applyLimit($criteria);
		
		$blogs = $model->findAll($criteria);
		
		$catelist = Category::getDropList(1);
		
		$model2 = new Blog();
		$criteria2 = new CDbCriteria();
		//查询条件
		$criteria2->addCondition("is_show=1");
		//排序
		$criteria2->order = 'id DESC';
		$criteria2->limit=5;
		$recent = $model2->findAll($criteria2);
		
		$this->render('index2',array(
			'blogs'=>$blogs,
			'catelist'=>$catelist,
			'page'=>$page,
			'recent'=>$recent,
		));
	}
	
	public function actionView($id){
		$id=intval($id);
		$blog=Blog::model()->find('id=:id',array('id'=>$id));
		
		$blog->views+=1;
		$blog->save();
		
		$catelist = Category::getDropList(1);
		
		$model = new Blog();
		$criteria = new CDbCriteria();
		//查询条件
		$criteria->addCondition("is_show=1");
		//排序
		$criteria->order = 'id DESC';
		$criteria->limit=5;
		$recent = $model->findAll($criteria);
		
		$this->render('view2',array(
			'blog'=>$blog,
			'catelist'=>$catelist,
			'recent'=>$recent,
		));
	}
	
}
