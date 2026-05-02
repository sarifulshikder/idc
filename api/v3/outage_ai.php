<?php
header('Content-Type: application/json');

echo json_encode([
 "risk_area"=>"Batiaghata POP",
 "risk"=>"Medium",
 "reason"=>"High latency trend detected"
]);
