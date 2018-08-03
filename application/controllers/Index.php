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

use Yaf\Controller_Abstract;
/**
 * 默认的 Index 控制器
 * 
 * @category Xxx
 * @package  Xxx
 * @author   laok <laok518@126.com>
 * @license  gun http://www.gun.org
 * @link     Xxx
 */
class IndexController extends YAF_Controller_Abstract
{
    /**
     * 默认Action操作
     * 
     * @return render
     */
    public function indexAction()
    {
        // 默认Action
        $this->getView()
            ->assign('content', 'hello world-2');
    }

    /**
     * 使用 bootstrap 模版
     * 
     * @return render
     */
    public function bootstrapAction()
    {
        $result = UserModel::all();
        // var_dump($result[0]['name']);
        // die;
        // $db = MyPDO::getInstance('localhost', 'root', '123123', 'yaf', 'utf8');
        // $result = $db->query("select * from yaf");
        $this->getView()->assign("result", $result);
    }

    /**
     * 增加
     * 
     * @return render
     */
    public function addAction()
    {
        if ($this->getRequest()->getMethod() == "POST") {
            $db = MyPDO::getInstance('localhost', 'root', '123123', 'yaf', 'utf8');
            if ($_POST['name'] && $_POST['email']) {
                $insertResult = $db->insert("yaf", $_POST);
                if ($insertResult) {
                    echo "成功";
                    $this->redirect("Index/bootstrap");
                } else {
                    echo "失败";
                }
            } else {
                die('数据格式有误');
            }
        }
        $this->getView();
    }

    /**
     * 编辑
     * 
     * @return render
     */
    public function editAction()
    {
        $db = MyPDO::getInstance('localhost', 'root', '123123', 'yaf', 'utf8');
        if ($this->getRequest()->getMethod() == "POST") {
            if ($_POST['name'] && $_POST['email']) {
                $updateResult = $db->update("yaf", $_POST, "id = $_POST[id]");
                if ($updateResult) {
                    header("content-type:application/json; charset=utf-8");
                    echo "成功";
                    $this->redirect("Index/bootstrap");
                } else {
                    echo "失败";
                    die;
                }
            } else {
                header("Content-type:text/html;charset=utf-8");
                echo('数据格式有误');
                $this->redirect("Index/bootstrap");
            }
        } else {
            $id = $_GET['id'];
            if (!$id) {
                return 'fail';
            }
            $result = $db->query("select * from yaf where id = $id");
            $this->getView()->assign('result', $result);
        }
    }

    /**
     * 删除
     * 
     * @return render
     */
    public function delAction()
    {
        $db = MyPDO::getInstance('localhost', 'root', '123123', 'yaf', 'utf8');
        if (!$_GET['id'] || !($db->query("select * from yaf where id = $_GET[id]"))) {
            die("用户不存在或数据有误");
        }
        $db->delete("yaf", "id = $_GET[id]");
        $this->redirect("Index/bootstrap");
    }
}