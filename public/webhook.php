<?php
header('Content-Type: application/json; charset=utf-8');
$payload = file_get_contents('php://input');
file_put_contents(__DIR__.'/../inbound.log', date('c')." ".$payload.PHP_EOL, FILE_APPEND);
echo json_encode(['ok'=>true]);
