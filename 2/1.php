<?php
//header('Content-Type: text/html; charset=UTF-8');
$binarydata = pack("nvc*", 0x1234, 0x5678, 65, 66);
echo $binarydata;
?>