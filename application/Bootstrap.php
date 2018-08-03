<?php
/**
 * User Model
 * 
 * @category Xxx
 * @package  Xxx
 * @author   laok <laok518@126.com>
 * @license  gun http://www.gun.org
 * @link     Xxx
 */
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
class Bootstrap extends YAF_Bootstrap_Abstract
{
    /**
     * 初始化配置
     * 
     * @return null
     */
    public function _initConfig()
    {
        $config = YAF_Application::app()->getConfig();
        YAF_Registry::set("config", $config);
    }

	/**
  * 初始化配置
    * 
    * @return null
    */
	public function _initDefaultName(YAF_Dispatcher $dispatcher)
	{
	    $dispatcher->setDefaultModule("Index")
			->setDefaultController("Index")
			->setDefaultAction("index");
	}

	/**
    * 初始化配置
    * 
    * @return null
    */
    public function _initRoute(YAF_Dispatcher $dispatcher)
    {
        $router = YAF_Dispatcher::getInstance()->getRouter();
		/**
		* 添加配置中的路由
        */
        @$router->addConfig(YAF_Registry::get("config")->routes);
    }

	/**
    * 初始化配置
    * 
    * @return null
    */
	public function _initComposerAutoload(YAF_Dispatcher $dispatcher)
	{
	    $autoload = APP_PATH . '\vendor\autoload.php';
		if (file_exists($autoload)) {
		    YAF_Loader::import($autoload);
		}
	}
}