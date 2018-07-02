<?php

use Yaf\Application;
use Yaf\Exception;
use Yaf\Loader;

define("APP_PATH", realpath(dirname(__FILE__) . '/../')); /**/

$app = new YAF_Application(APP_PATH . "\conf\application.ini", ini_get('yaf.environ'));
/*
 * --------------------------------------------------------------------
 * LOAD Laravel Eloquent ORM
 * --------------------------------------------------------------------
 *
 */
require APP_PATH . '\application\eloquent.php';

$app->bootstrap() /*实例化Bootstrap, 依次调用Bootstrap中所有_init开头的方法*/
    ->run();