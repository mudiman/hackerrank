<?php
$handle = fopen ("php://stdin","r");
$tc = (int)fgets($handle);
for($t=0; $t<$tc; $t++) {
    $ip = fgets($handle);
    if (preg_match('/\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/', $ip)) {
        echo "IPv4\n";
    }elseif (preg_match('/((\d|[a-f]){1,4}:){7}((\d|[a-f]){1,4})$/', $ip)) {
        echo "IPv6\n";
    }else{
        echo "Neither\n";
    }
}

?>