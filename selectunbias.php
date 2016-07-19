<?php
$handle = fopen("php://stdin", "r");
$n = (int)fgets($handle);
$k = (int)fgets($handle);
$arr = [];
for($i=0; $i<$n;$i++) {
    $arr [] = (int)fgets($handle);
}
sort($arr,SORT_NUMERIC);
$n3=$n-$k+1;
$min = null;
for($i=0; $i<$n3;$i++) {
    $res = $arr[$i+$k-1] - $arr[$i];
    if ($min==null || $res<$min) {
        $min=$res;
    }
}
echo $min;
?>