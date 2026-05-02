<?php
include "../config/db.php";

$name = $_GET['name'] ?? '';
$pass = $_GET['pass'] ?? '12345';

echo "PPPoE User $name Created (API placeholder)";
?>
