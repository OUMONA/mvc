<?php
class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';// Pas de mot de passe
    private $database = 'ldscampus';
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
        }

        return $this->conn;
    }
}
?>
