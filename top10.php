<?php
//出现频率最高的十个单词
function top10($str)
{
	$arr = chafen($str);
	foreach ($arr as $key => $value) {
		$arr1[$value] = 0;
		foreach ($arr as $key1 => $value1) {
			if(($value == $value1) && ($key != $key1))
				$arr1[$value]++;
		}
	}
	asort($arr1);//从小到大排序
	var_dump($arr1);
}

$str = 'a,dfsa askdjflk la.lajs!jla,lajs';
top10($str);
function chafen($str){
	$arr = [',',' ','.','!'];
	$length = strlen($str);
	$m = 0;
	$astr[$m] = '';
	for ($i=0;$i<$length;$i++){
		
		if(in_array($str[$i], $arr)){
			$m++;
			$astr[$m] = '';
		}else{
			$astr[$m] .= $str[$i];
		}
	}
	return ($astr);
}

?>