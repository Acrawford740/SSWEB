<?php

$url = "https://api.thecatapi.com/v1/images/search?limit=3";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

foreach ($data as $cat) {
    echo $cat['url'] . PHP_EOL;
}

/*
Get a cat inage to display on the screen
*/