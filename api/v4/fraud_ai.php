<?php
header('Content-Type: application/json');

echo json_encode([
 "alert"=>"Possible bypass detected",
 "customer_id"=>"1021",
 "risk"=>"High"
]);
