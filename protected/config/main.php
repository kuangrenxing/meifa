﻿<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'鼎峰国际烫染连锁',
	'language'=>'zh_cn',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'cc',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'yiiadmin'=>array(
                'password'=>'cc',
                'registerModels'=>array(
                    //'application.models.Contests',
                    //'application.models.BlogPosts',
                    'application.models.About',
                	'application.models.Admin',
                	'application.models.Careers',
                	'application.models.Contact',
                	'application.models.Hairproducts',
                	'application.models.Hairstyleshow',
                	'application.models.Hairstylist',
                	'application.models.Join',
                	'application.models.Knowledge',
                	'application.models.Specialoffers',
//                 	'application.models.',
//                 	'application.models.',
                ),
                //'excludeModels'=>array(),
            ),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		/* 'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		), */
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=meifa',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
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
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'chenxin448@126.com',
		'companyname'=>'鼎峰国际',
		'upload'=>'upload',//上传文件夹
		'uploadUrl'=>'protected/upload',//上传文件夹'
		'avatar'=>'upload'.DIRECTORY_SEPARATOR.'avatar',//头像路径
		'picture'=>'upload'.DIRECTORY_SEPARATOR.'picture',//照片路径
		'copyright'=>'鼎峰国际烫染连锁机构',
		'domainName'=>'http://meifa.dev',
		
	),
);
