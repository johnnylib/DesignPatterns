<?php 
//冒泡排序


function selectionSort(){

	$arr = array(3,19,56,20,2,204,97);
	$len = count($arr);
	
	echo "<br />排序前:  ";
	print_r($arr);
	

	//
	for ($i=0; $i < $len -1; $i++) {  
		
		$max = $arr[0];
		$max_pos = 0;
		for ($j=0; $j < $len - $i ; $j++) { 
			if ($arr[$j] > $max) {
				$max = $arr[$j];
				$max_pos = $j;
			}
		}

		$temp = $arr[$max_pos];
		$arr[$max_pos] = $arr[$len-1-$i];
		$arr[$len-1-$i] = $temp;
	}
	echo "<br />排序后: ";
	print_r($arr);
	
}

selectionSort();
