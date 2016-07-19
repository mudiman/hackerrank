<?php
function rec($result, $wrapper, $m){
    $newChocolate = floor($wrapper/$m);
    $result += $newChocolate;

    $wrapperRemain = ($wrapper%$m);
    $wrapper = $newChocolate + $wrapperRemain;

    if($wrapper > 0 && $wrapper >= $m && $wrapper%$m >= 0){
        return rec($result, $wrapper, $m);
    }
    return $result;
}


$_fp = fopen("php://stdin", "r");
$lines = fgets($_fp);
for ($i=0; $i<$lines; $i++){
    fscanf($_fp, "%d %d %d", $n, $c, $m);
    $result = 0;
    $remain = 0;
    $wrapper = 0;

    $result = floor($n/$c);
    $wrapper = $result;
    echo rec($result, $wrapper, $m);
    echo "\n";
}
?>