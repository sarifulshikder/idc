<?php
include "../config/db.php";

$conn->exec("UPDATE customers SET status='Disabled' WHERE bill > 0");

echo "Due users disabled";
?>
