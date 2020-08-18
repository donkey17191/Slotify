<?php

$path = '/dir0/dir1/myfile.php';
$file = 'file1.txt';
// Return filename

//echo basename($path);

// Return filename without extension
//echo basename($path, '.php');

//echo dirname($path);

//echo file_exists($file);
//echo realpath($file);

echo is_file($file);