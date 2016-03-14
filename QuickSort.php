<?php 
// 快速排序


function quickSort($arr){

	$arr_len = count($arr);

	//var_dump($arr);

	if($arr_len <= 1){
		return $arr;
	}
	//声明变量
	$mid = $arr[0];
	$left_arr = array();
	$right_arr = array();

	for($i=1;$i < $arr_len; $i++){
		if($arr[$i] > $mid){		
			$right_arr[] = $arr[$i];
		}else{
			$left_arr[] = $arr[$i];
		}

	}	

	//递归处理
	$left_arr = quickSort($left_arr);
	$mid_arr[] = $mid;
	$right_arr = quickSort($right_arr);

	//合并数组
	return array_merge($left_arr,$mid_arr,$right_arr);

}

//函数调用
$arr = array(3,19,56,20,2,204,97,19);
$result = quickSort($arr);

var_dump($result);



