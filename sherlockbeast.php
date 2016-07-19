<?php
$_fp = fopen(dirname(__FILE__) . "\input.txt", "r");
$t = fgets($_fp);
for($i=0; $i<$t; $i++){
    $n = fgets($_fp);
    $ntmp = $n;
    $nb5 = $nb3 = 0;

    // check first how many 5
    while ($ntmp > 0){
        if ($ntmp % 3 == 0) {
            $nb5 = $ntmp;
            break;
        }
        $ntmp -= 5;
    }
    // rest are 3s
    $nb3 = $n-$ntmp;

    if ($ntmp < 0 || $nb3 % 5 != 0) {
        echo -1 . "\n";
        continue;
    }

    $string = str_repeat('5', (int)$nb5);
    $string .= str_repeat('3', (int)$nb3);
    echo $string . "\n";
}