<?php

class Database {
    private $host = "localhost";
    private $db_name = "jouw_database";
    private $username = "root";
    private $password = "";

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Verbinding succesvol gemaakt!";
        } catch (PDOException $exception) {
            echo "Fout bij verbinden: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>