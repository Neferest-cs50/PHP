<?php 

    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        private $conn;
        private $stmt;

        public function __construct() {
            // Set DNS
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;

            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            // Create PDO instance
            try {
                $this->conn = new PDO($dsn, $this->user, $this->pass,$options);
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
            }
        }

        // Delete from people table a person
        public function delete($id) {
            $this->stmt = $this->conn->prepare("DELETE FROM people WHERE id = ?");
            
            if ($this->stmt->execute(array($id))) {
                return true;
            } else {
                return false;
            }
        }
        
        // Add to people table someone
        public function add($name, $job) {
            $this->stmt = $this->conn->prepare("INSERT INTO people(name, job) VALUES (?, ?)");

            if ($this->stmt->execute(array($name, $job))) {
                return true;
            } else {
                return false;
            }
        }

        // Update a person's name or job or both
        public function update($id, $name, $job) {
            $this->stmt = $this->conn->prepare("UPDATE people SET name = ?, job = ? WHERE id = ?");
            
            if ($this->stmt->execute(array($name, $job, $id))) {
                return true;
            } else {
                return false;
            }
        }

        // Get all the people
        public function get_all() {
            $this->stmt = $this->conn->prepare("SELECT * FROM people");
            $this->stmt->execute([]);

            return $this->stmt->fetchAll();
        }

        // Get one person
        public function get($id) {
            $this->stmt = $this->conn->prepare("SELECT * FROM people WHERE id = ?");
            $this->stmt->execute([$id]);

            return $this->stmt->fetch();
        }
    }

?>

<?php

    $db = new Database();

?>