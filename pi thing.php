<?php
$pi= str_split("31415926535897932384626433833");
$sizepi= count($pi);
$handle = fopen("php://stdin", "r");
$testcs = (int)fgets($handle);
for($j=0; $j<$testcs;$j++) {
    $sent = explode(" ",fgets($handle));
    $size= count($sent);
    $ispi=true;
    for($i=0;$i<$size && $i<$sizepi;$i++){
        if (strlen(trim($sent[$i])) != (int)$pi[$i]) {
            $ispi=false;
            break;
        }
    }
    if ($ispi)
        echo "It's a pi song.\n";
    else
        echo "It's not a pi song.\n";
}
?>