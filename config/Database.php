<?php
class Database {
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;

    public function __construct() {
        $this->host     = getenv('PGHOST')     ?: 'ep-proud-mode-a4gf0rsq-pooler.us-east-1.aws.neon.tech';
        $this->db_name  = getenv('PGDATABASE') ?: 'neondb';
        $this->username = getenv('PGUSER')     ?: 'neondb_owner';
        $this->password = getenv('PGPASSWORD') ?: 'npg_4VwA7CPSImgs';
    }

    public function connect() {
        $this->conn = null;

        try {
            $dsn = 'pgsql:host=' . $this->host . ';dbname=' . $this->db_name . ';sslmode=require';
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo json_encode(['message' => 'Connection Error: ' . $e->getMessage()]);
        }

        return $this->conn;
    }
}
