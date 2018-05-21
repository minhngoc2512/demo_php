<?php
$filename = "/home/minhngoc/.pm2/logs/anduoc-vuejs-out-0.log";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
echo $contents;
?>