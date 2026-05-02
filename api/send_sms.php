<?php
$number = $_GET['number'] ?? '';
$msg = $_GET['msg'] ?? '';

echo "SMS Sent to $number : $msg";
?>
