<?php

use Yaf\Application;
use Yaf\Exception;
use Yaf\Loader;

define("APP_PATH", realpath(dirname(__FILE__) . '/../')); /**/
// echo (APP_PATH);die;
$app = new Application(APP_PATH . "\conf\application.ini");
/*

 * --------------------------------------------------------------------

 * LOAD Laravel Eloquent ORM

 * --------------------------------------------------------------------

 *

 */
require APP_PATH . '\application\eloquent.php';

$app->bootstrap() /*实例化Bootstrap, 依次调用Bootstrap中所有_init开头的方法*/
    ->run();