<?php
//$token = bin2hex(random_bytes(64)); //for php7 and above 
$token = bin2hex(openssl_random_pseudo_bytes(64));
echo $token;
?>