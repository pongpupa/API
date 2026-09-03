<?php
require_once __DIR__ . '/db_connect.php';

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (isset($data['events'][0])) {
$event = $data['events'][0];
$userId = $event['source']['userId'] ?? '';

if (!empty($userId)) {
file_put_contents('userid.txt',$userId . PHP_EOL,FILE_APPEND);
}
}

http_response_code(200);
echo "สวัสดี";