<?php
$number=$_GET['number'] ?? '';
$msg=$_GET['msg'] ?? '';

echo "WhatsApp sent to $number : $msg";
