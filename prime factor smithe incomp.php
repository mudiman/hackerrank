<?php
function primefactor($num) {
	$sqrt = sqrt($num);
	for ($i = 2; $i <= $sqrt; $i++) {
		if ($num % $i == 0) {
			return array_merge(primefactor($num/$i), array($i));
		}
	}
	return array($num);
}

$handle = fopen("php://stdin", "r");
$n = (int)fgets($handle);
$sumOfDigits= array_sum(str_split((string)$n));
$rem = 0;
$arr=primefactor($n);
$arr = implode('',$arr);
if (array_sum(str_split($arr)) == $sumOfDigits)
    echo "1";
else
    echo "0";

?>