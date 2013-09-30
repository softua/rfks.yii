<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return [
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Ассоциация компьютерного спорта',
	'language'=>'ru',

	// preloading 'log' component
	'preload'=>['log'],

	// autoloading model and component classes
	'import'=>[
		'application.models.*',
		'application.components.*',
	],

	'modules'=>[
		// uncomment the following to enable the Gii tool
		'gii'=>[
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		],
	],

	// application components
	'components'=>[
		'user'=>[
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		],
		// uncomment the following to enable URLs in path-format
		'urlManager'=>[
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>[
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			],
		],
		'db'=>[
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		],
		// uncomment the following to use a MySQL database
		/*
		'db'=>[
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		],
		*/
		'errorHandler'=>[
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		],
		'log'=>[
			'class'=>'CLogRouter',
			'routes'=>[
				[
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				],
				// uncomment the following to show log messages on web pages
				/*
				[
					'class'=>'CWebLogRoute',
				],
				*/
			],
		],
	],

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>[
		// this is used in contact page
		'adminEmail'=>'softua6@gmail.com',
	],
];