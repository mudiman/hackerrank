<?php
$fibonacciArray = [];
$fibonacciArray[0] = 0;
$fibonacciArray[1] = 1;
$fibonacciArray[2] = 1;
$fibonacciArray[3] = 2;
function generateFibonacciNumbers($size) {
    global $fibonacciArray;
   
    if ($fibonacciArray[count($fibonacciArray)-1] > $size) {
        return in_array($size,$fibonacciArray);
    }
	for ($x=count($fibonacciArray); $fibonacciArray[$x-1] < $size; $x++) {
		$fibonacciArray[$x] = $fibonacciArray[$x-2] + $fibonacciArray[$x-1];
	}
	if ($fibonacciArray[$x-1] == $size) {
        return true;
    }
}
$handle = fopen("php://stdin", "r");
$n = (int)fgets($handle);
for($i=0; $i<$n;$i++) {
    $num = (int)fgets($handle);
    
    echo (generateFibonacciNumbers($num) ? "IsFibo\n":"IsNotFibo\n");
}
?>