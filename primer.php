<?php

$response = @file_get_contents("https://www.googleapis.com/books/v1/volumes?q={query}");

if ($response === false) {
	$response = file_get_contents("./books.json");

	print_r($response);
	/*
} else {
	$cache = [
		"date" => date(Y-m-d),
		"content" => json_decode($response)
	];
	file_put_contents("./books.json", json_encode($cache));
}
$content = json_decode($response, true);
*/
}

?>