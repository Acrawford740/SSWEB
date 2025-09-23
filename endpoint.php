<?php
header('Content-Type: application/json; charset=utf-8');
http_response_code(200);

$name = $_GET['name'] ?? 'World';
echo json_encode([
  'message' => "Hello, $name",
  'timestamp' => date('c'),
  'conl' => JSON_UNESCAPED_SLASHES,
  'conl2'=> JSON_UNESCAPED_UNICODE
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);