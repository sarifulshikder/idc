<?php
header('Content-Type: application/json');

echo json_encode([
 "this_month"=>"250000",
 "next_month_prediction"=>"287000",
 "growth"=>"14.8%"
]);
