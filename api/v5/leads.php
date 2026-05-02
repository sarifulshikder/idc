<?php
header('Content-Type: application/json');

echo json_encode([
 "new_leads"=>"42",
 "hot_leads"=>"11",
 "converted_today"=>"5"
]);
