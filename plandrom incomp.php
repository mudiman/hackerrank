<?php
function choseStartPosition($word,$size)
{
    for ($i = 0 ;$i < $size;$i++) {
        if ($word[$i] == $word[$size-$i]) { 
            continue;
        }
        if (ord($word[$i]) > ord($word[$size-$i])) { 
            return $i;
        } else {
            return $size-$i;
        } 
    }
}
$handle = fopen ("php://stdin","r");
$t = (int)fgets($handle);
for($i=0; $i<$t; $i++)
{
    $word = (string) trim(fgets($handle));
    $size = strlen($word)-1;
    $position = choseStartPosition($word,$size);
    $operation = 0;
    while (strrev($word) != $word) {
        if ($word[$position] == $word[abs($size-$position)]) {
            $position = choseStartPosition($word,$size);
        }
        $word[$position] = chr(ord($word[$position]) - 1);
        $operation++;
    }
    print($operation) . "\n";
}
fclose($handle);
?>