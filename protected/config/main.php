<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'技术派',

	//语言
	'language' => 'zh_cn',
	//默认控制器
	'defaultController' => 'blog',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.srbac.controllers.SBaseController',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'ghl888',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
		'admin' => array(// 后台管理
			'class' => 'application.modules.admin.AdminModule',
		),
		
		
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl'=>array('admin/public/login'),
		),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => [
				'blogs/<pid:\d+>/page-<page:\d+>' => 'blog/index',
				'blogs/page-<page:\d+>' => 'blog/index',
				'blogs/<pid:\d+>' => 'blog/index',
				
				'blogs' => 'blog/index',
				'blog/<id:\d+>' => 'blog/view',
			],
			'urlSuffix' => '.html',
		),
		
		'authManager' => array(
			// Path to SDbAuthManager in srbac module if you want to use case insensitive
			//access checking (or CDbAuthManager for case sensitive access checking)
			'class' => 'CDbAuthManager',
			// The database component used
			'connectionID' => 'db',
			// The itemTable name (default:authitem)
			'itemTable' => 's_items',
			// The assignmentTable name (default:authassignment)
			'assignmentTable' => 's_assignments',
			// The itemChildTable name (default:authitemchild)
			'itemChildTable' => 's_itemchildren',
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'uploadPath' =>dirname(Yii::app()->BasePath).'upload/img/',
		'uploadUrl' => '/upload/img/',
	),
);
