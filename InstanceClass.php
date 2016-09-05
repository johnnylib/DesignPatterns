<?php 
/**
 * php设计模式 ---单例模式
 * 
 * 1.$_instance必须声明为静态的私有变量;
 * 2.构造函数必须设置为私有，防止外部new；
 * 3.要禁止对象克隆
 */

class Instance{
	//
	private static $_instance;

	private function __construct()
	{
		//处理相应的逻辑。。。
		echo "被实例化了~~";
	}

	//禁止克隆对象
	 function __clone(){
		trigger_error('Clone is not allow' ,E_USER_ERROR);
	}


	public static function get_instance(){
		//
		if (!isset(self::$_instance)) {
			return self::$_instance = new self();
		} else {
			return self::$_instance;
		}
		
	}

	//测试 是否创建对象成功
	function test(){

		echo "创建成功！";
	}
}

//$obj = new Instance;

$obj = Instance::get_instance();

//$obj_clone =  clone $obj;
$obj->test();

