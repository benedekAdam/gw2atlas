<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// register Composer autoloader
require(__DIR__ . '/vendor/autoload.php');

// include Yii class file
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

// load application configuration
$config = require(__DIR__ . '/config/web.php');

// create, configure and run application
(new yii\web\Application($config))->run();

