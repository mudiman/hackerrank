<?php

$handle = fopen (dirname(__FILE__)."\input.txt","r");
$tc = (int) fgets($handle);
for($t=0; $t<$tc;$t++) {
    $stockCount= (int) fgets($handle);
    $stocks = array_map(function($indexValue){
        return (int)trim($indexValue);
    },explode(" ",fgets($handle)));

    $sum=$count=0;
    $max=max($stocks);
    $min=min($stocks);
    $count=count($stocks)-1;
    for($i=0;$i<$count;$i++){
        $stock=$stocks[$i];
        if ($stock<$max) {
            $sum-=$stock;
            $count++;
        }elseif ($stock==$max) {
            $sum+=$max*$count;

        }
    }
    echo $sum."\n";
}

