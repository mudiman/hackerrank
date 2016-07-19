<?php
$_fp = fopen(dirname(__FILE__) . "\input.txt", "r");
$t = fgets($_fp);
$map = [];
for($i=0; $i<$t; $i++) {
    $map[] = str_split(trim(fgets($_fp)));
}
for($k=1; $k<$t-1; $k++) {
    for($l=1; $l<$t-1; $l++) {
        if (($map[$k][$l] > $map[$k][$l-1])
            && ($map[$k][$l] > $map[$k][$l+1])
            && ($map[$k][$l] > $map[$k-1][$l])
            && ($map[$k][$l] > $map[$k+1][$l])) {
            $map[$k][$l] = 'X';
        }
    }
}
foreach ($map as $row)
    echo implode('',$row)."\n";

