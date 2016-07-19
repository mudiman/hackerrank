<?php


function maxXor( $l,  $r) {
    $max = 0;
    for ($i=$l;$i<=$r;$i++) {
        for ($j=$l;$j<=$r;$j++) {
            $val = $i^$j;
            
            if ($max < $val) {
                $max = $val;
            }
        }
    }
    return $max;
}
    
$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_l);


fscanf($__fp, "%d", $_r);

$res = maxXor($_l, $_r);
echo $res;

?>
