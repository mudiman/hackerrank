<?php
$handle = fopen("php://stdin", "r");
$h= (int)fgets($handle);
$m= (int)fgets($handle);
$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);

switch($m){
    case $m==0:
        echo $f->format($h)." o'clock";
        break;
    case $m<30:
        echo $f->format($m)." minute past ".$f->format($h);
        break;
    case $m==30:
        echo "half past ".$f->format($h);
        break;
    case $m==45:
        echo "quarter to ".$f->format($h+1);
        break;
    case $m>30:
        echo $f->format(60-$m)." minutes to ".$f->format($h+1);
        break;
}

?>