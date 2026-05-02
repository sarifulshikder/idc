<?php
header('Content-Type: application/json');

echo json_encode([
 "customer"=>"IDC User",
 "package"=>"20 Mbps",
 "bill"=>"800",
 "status"=>"Active",
 "usage"=>"325 GB"
]);
