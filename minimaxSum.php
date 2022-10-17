<!DOCTYPE html>
<html>
<body>
<?php
//Input here
$arr = [1,3,5,7,9];
echo "Input Array: ";
foreach($arr as $a){
	echo $a;
	echo " ";
}
echo "<br>";
function minimaxSum($arr) {
	//find max
	$max = $arr[0];
	for($i = 0;$i<count($arr);$i++){
		if($arr[$i] > $max){
			$max = $arr[$i] ;
		}
	}
	//find min
	$min = $arr[0];
	for($i = 0;$i<count($arr);$i++){
		if($arr[$i] < $min){
			$min = $arr[$i] ;
		}
	}
	//sumAll
	$sum = 0;
	for($i = 0;$i<count($arr);$i++){
		$sum = $sum + $arr[$i];
	}
	//sumMax
	$sumMax = $sum - $min;
	//sumMin
	$sumMin = $sum - $max;
	
	//find even number
	$even = [];
	for($i = 0;$i<count($arr);$i++){
		if($arr[$i] % 2 == 0){
			array_push($even,$arr[$i]);
		}
	}
	echo "Find even number: ";
	if($even){
		foreach($even as $one){
			echo $one;
			echo " ";
		}
	}
	else{
		echo "No even number in array";
	}
	echo "<br>";
	//find even number
	$odd = [];
	for($i = 0;$i<count($arr);$i++){
		if($arr[$i] % 2 != 0){
			array_push($odd,$arr[$i]);
		}
	}
	echo "Find odd number: ";
	if($odd){
		foreach($odd as $one){
			echo $one;
			echo " ";
		}
	}
	else{
		echo "No odd number in array";
	}
	echo "<br>";
	//sum except 1
	$sumif1 = $sum;
	for($i = 0;$i<count($arr);$i++){
		if(empty($arr[$i] != 1)){
			$sumif1 = $sum - 1;
			break;
		}
	}
	//sum except 2
	$sumif2 = $sum;
	for($i = 0;$i<count($arr);$i++){
		if(empty($arr[$i] != 2)){
			$sumif2 = $sum - 2;
			break;
		}
	}
	//sum except 3
	$sumif3 = $sum;
	for($i = 0;$i<count($arr);$i++){
		if(empty($arr[$i] != 3)){
			$sumif3 = $sum - 3;
			break;
		}
	}
	//sum except 4
	$sumif4 = $sum;
	for($i = 0;$i<count($arr);$i++){
		if(empty($arr[$i] != 4)){
			$sumif4 = $sum - 4;
			break;
		}
	}
	//sum except 5
	$sumif5 = $sum;
	for($i = 0;$i<count($arr);$i++){
		if(empty($arr[$i] != 5)){
			$sumif5 = $sum - 5;
			break;
		}
	}
	echo "Find Max: ";
	echo $max;
	echo "<br>";
	echo "Find Min: ";
	echo $min;
	echo "<br>";
	echo "Total: ";
	echo $sum;
	echo "<br>";
	echo "SumMinMax: ";
	echo $sumMin;
	echo " ";
	echo $sumMax;
	
	echo "<br>";
	echo "Sum everything except 1: ";
	echo $sumif1;
	echo "<br>";
	echo "Sum everything except 2: ";
	echo $sumif2;
	echo "<br>";
	echo "Sum everything except 3: ";
	echo $sumif3;
	echo "<br>";
	echo "Sum everything except 4: ";
	echo $sumif4;
	echo "<br>";
	echo "Sum everything except 5: ";
	echo $sumif5;
}
minimaxSum($arr);



?>
</body>
</html>