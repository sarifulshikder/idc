<?php
include "../config/db.php";

$trx = $_GET['trxid'] ?? '';

echo "Payment Verified: $trx";
?>
