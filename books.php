<?php

print_r($argv);

//$num = count($argv);
$query_array = array_slice($argv, 1);
$query_string = implode(' ', $query_array);
$query = urlencode($query_string);

echo $query;

$file = file_get_contents('https://www.googleapis.com/books/v1/volumes?q={$query}', true);

print_r($file);



?>