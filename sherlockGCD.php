<?php

function lowestRemainder($a, $b){
    $reste = $a % $b;
    if($reste > 0){
        return lowestRemainder($b, $reste);
    }
    return $b;
}
$_fp = fopen(dirname(__FILE__) . "\input.txt", "r");
$t = fgets($_fp);
for($i=0; $i<$t; $i++) {
    fscanf($_fp, "%d", $nos);
    $numbers =  explode(' ',trim(fgets($_fp)));
    if ($nos == 1 && $numbers[0] > 1) {
        echo "NO\n";
        continue;
    }
    $lowestRemainder = lowestRemainder($numbers[0], $numbers[1]);
    for($j=1; $j<$nos-1; $j++){
        $lowestRemainder = lowestRemainder($numbers[$j+1], $lowestRemainder);
    }

    $result = ($lowestRemainder > 1) ? "NO" : "YES";
    echo $result . "\n";

}