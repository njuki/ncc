<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array (
		'basePath' => dirname ( __FILE__ ) . DIRECTORY_SEPARATOR . '..',
		'name' => 'NCC Recruitment Portal',
		'theme' => 'ncc',
		
		// preloading 'log' component
		'preload' => array (
				'log' 
		),
		
		// autoloading model and component classes
		'import' => array (
				'application.models.*',
				'application.components.*',
				'application.libraries.*',
		),
		
		// modules
		'modules' => array (
				// uncomment the following to enable the Gii tool
				
				'gii' => array (
						'class' => 'system.gii.GiiModule',
						'password' => '12345',
						// If removed, Gii defaults to localhost only. Edit carefully to taste.
						'ipFilters' => array (
								'127.0.0.1',
								'::1' 
						) 
				),
				'core' 
		),
		// application components
		'components' => array (
				'user' => array (
						// enable cookie-based authentication
						'allowAutoLogin' => true
				),
				
				 'db'=>array(
				 'connectionString' => 'mysql:host=localhost;dbname=recruitment',
				 'emulatePrepare' => true,
				 'username' => 'root',
				 'password' => 'r00t',
				 'charset' => 'utf8',
				 'tablePrefix' => 'tbl_',
				 ),
				
				'errorHandler' => array (
						// use 'site/error' action to display errors
						'errorAction' => 'site/error' 
				),
				'urlManager' => array (
						'urlFormat' => 'path',
						'rules' => array (
								'post/<id:\d+>/<title:.*?>' => 'post/view',
								'posts/<tag:.*?>' => 'post/index',
								'<controller:\w+>/<action:\w+>' => '<controller>/<action>' 
						) 
				),
				'log' => array (
						'class' => 'CLogRouter',
						'routes' => array (
								array (
										'class' => 'CFileLogRoute',
										'levels' => 'error, warning' 
								) 
						)
						// uncomment the following to show log messages on web pages
						/*
						 * array(
						 * 'class'=>'CWebLogRoute',
						 * ),
						 */
						 
				) 
		),
		
		// application-level parameters that can be accessed
		// using Yii::app()->params['paramName']
		'params' => require (dirname ( __FILE__ ) . '/params.php') 
);