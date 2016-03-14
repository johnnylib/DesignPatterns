<?php

/**
* 求和
*/
class GetSum
{
	


	public function sum($num1,$num2){

		return $num1 + $num2;

	}


}

require './FactoryClass.php';
//测试 工厂模式
$obj = Factory::createObj('GetSum');

$result = $obj->sum(20,10);
echo $result;


var_dump($obj);