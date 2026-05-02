<?php
$paymentID=$_GET['paymentID'] ?? '';
echo json_encode([
 "paymentID"=>$paymentID,
 "statusCode"=>"0000",
 "statusMessage"=>"Successful"
]);
