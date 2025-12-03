<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Cho phép frontend gọi từ domain khác rjehfkh

$data = [
    'message' => 'Hello from PHP backend!',
    'timestamp' => date('Y-m-d H:i:s')
];

echo json_encode($data);
?>