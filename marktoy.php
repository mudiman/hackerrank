<?php

$handle = fopen (dirname(__FILE__)."\input.txt","r");
list($n,$k) = array_map(function($indexValue){
    return (int)trim($indexValue);
},explode(" ",fgets($handle)));

$toys = array_map(function($indexValue){
    return (int)trim($indexValue);
},explode(" ",fgets($handle)));

$toys = array_filter($toys,function($indexValue){
    global $k;
    return $indexValue<=$k;
});

sort($toys,SORT_NUMERIC);

$sum=$c=0;
foreach($toys as $toy) {
    if ($sum+$toy>$k)
        break;
    $sum+=$toy;
    $c++;
}
echo $c;
