<?php
header('Content-Type: application/json');

echo json_encode([
 "issue"=>"POP Latency",
 "action"=>"Route Switched",
 "status"=>"Recovered"
]);
