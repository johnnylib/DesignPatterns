<?php 

/**
* php工厂模式
*/
class Factory
{
	
	function __construct()
	{
		//...
	}

	public static function createObj($objName){
		return new $objName; 
	}

}




