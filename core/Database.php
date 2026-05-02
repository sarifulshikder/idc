<?php
class Database {
    private $conn;
    public function connect() {
        $config = include __DIR__ . '/../config/database.php';
        $this->conn = new PDO(
            "mysql:host={$config['host']};dbname={$config['dbname']}",
            $config['user'],
            $config['pass']
        );
        return $this->conn;
    }
}
