<?php
$host = 'idc_db';
$db   = 'idc';
$user = 'root'; // root ইউজার ব্যবহার করা নিরাপদ
$pass = 'RootStrongPass123'; // আপনার কম্পোজ ফাইলে দেওয়া root password

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
