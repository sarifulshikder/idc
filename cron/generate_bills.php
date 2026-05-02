<?php
include "../config/db.php";

$conn->exec("UPDATE customers SET bill = bill");

echo "Bills generated";
?>
