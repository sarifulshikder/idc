<?php
header('Content-Type: application/json');

echo json_encode([
 "name"=>"Demo Customer",
 "package"=>"10 Mbps",
 "bill"=>"500",
 "status"=>"Active"
]);
