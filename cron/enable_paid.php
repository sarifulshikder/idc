<?php
include "../config/db.php";

$conn->exec("UPDATE customers SET status='Active' WHERE bill = 0");

echo "Paid users enabled";
?>
