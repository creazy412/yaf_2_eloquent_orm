<?php
/**
 * 默认index
 * 
 * @category Xxx
 * @package  Xxx
 * @author   laok <laok518@126.com>
 * @license  gun http://www.gun.org
 * @link     Xxx
 */
//define("APP_PATH") OR exit("No direct script access allowed");

use Illuminate\Database\Capsule\Manager as Capsule;

// Autoload 自动载入

require APP_PATH . '../vendor/autoload.php';

// 载入数据库配置文件

require_once APP_PATH . '\conf/database.php';

// Eloquent ORM

$capsule = new Capsule;

$capsule->addConnection($db['eloquent']);

$capsule->bootEloquent();