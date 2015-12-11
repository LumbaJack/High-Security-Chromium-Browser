<?php
header("Content-type: text/xml");

$path = preg_replace('/^\/update/', 'update.dir', urldecode($_SERVER["REQUEST_URI"]));

#echo "PATH is $path";
echo (file_exists($path)) ? file_get_contents($path) : '<?xml version="1.0"?><updates></updates>';
?>
