<?php
$handle = fopen("php://stdin", "r");
$n = (int)fgets($handle);
$multArr=[];
$multArr[3]=3;
$multArr[5]=8;
for($h=0; $h<$n;$h++) {
    $num=(int)fgets($handle);;
    $multiples = [];
    $len = count($multArr)-1;
    for ($i=$num-1;$i>$len;$i--) {
        if ($i % 3 == 0 ) {
            $multiples [] = $i;
        } elseif ($i % 5 == 0 ) {
            $multiples [] = $i;
        }
    }
    if (isset($multArr[$i])) {
        $multArr[$num] = $multArr[$i] + array_sum($multiples);
    }
    if (!isset($multArr[$num]))
        $multArr[$num] = array_sum($multiples);
    echo $multArr[$num]."\n";
}
?>