<?php

use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
use Yaf\Loader;
use Yaf\Application;
use Yaf\Registry;
/**
* 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
* 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
* 调用的次序, 和申明的次序相同
*/
class Bootstrap extends Bootstrap_Abstract
{
    public function _initConfig()
	{
	    $config = Application::app()->getConfig();
		Registry::set("config", $config);
	}

	public function _initDefaultName(Dispatcher $dispatcher)
	{
	    $dispatcher->setDefaultModule("Index")
			->setDefaultController("Index")
			->setDefaultAction("index");
	}

	public function _initRoute(Dispatcher $dispatcher)
	{
	    $router = Dispatcher::getInstance()->getRouter();
		/**
		* 添加配置中的路由
		*/
		@$router->addConfig(Registry::get("config")->routes);
	}

	public function _initComposerAutoload(Dispatcher $dispatcher)
	{
	    $autoload = APP_PATH . '\vendor\autoload.php';
		if (file_exists($autoload)) {
		    Loader::import($autoload);
		}
	}
}