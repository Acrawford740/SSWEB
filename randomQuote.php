<?php
header('Content-Type: application/json; charset=utf-8');

$quotes = [
  "Simplicity is the soul of efficiency. — Austin Freeman",
  "Programs must be written for people to read. — Harold Abelson",
  "The only way to learn a new programming language is by writing programs in it. — Dennis Ritchie",
];

$quote = $quotes[array_rand($quotes)];
echo json_encode(['quote' => $quote, 'date' => date('Y-m-d')], JSON_PRETTY_PRINT);