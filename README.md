# yaf_2_eloquent_orm
这里实现了两种操作数据库的方式

1.php_pdo_mysql 方式

2.Eloquent ORM 方式

public function indexAction(){}
public function bootstrapAction(){} // 使用ORM方式
public function addAction(){} // pdo 方式
public function editAction(){} // pdo 方式
public function delAction(){} // pdo 方式

切记：
项目若要运行，记得在 php.ini 文件中把
yaf.use_namespace=1
yaf.use_spl_autoload=1
打开。

