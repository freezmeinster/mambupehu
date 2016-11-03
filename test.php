<?php
$bytes=32;
$secure=true;
$buf = openssl_random_pseudo_bytes($bytes, $secure);
echo $buf;
?>
