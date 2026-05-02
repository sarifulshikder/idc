<?php
header('Content-Type: application/json');

echo json_encode([
 "node"=>"POP-2",
 "risk"=>"High",
 "reason"=>"Power fluctuation trend",
 "recommended_action"=>"Battery replacement"
]);
