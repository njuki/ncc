<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-1.1.13/framework/yii.php';
//$yii=dirname(__FILE__).'/../yii.1.1.13/yii.1.1.13/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
