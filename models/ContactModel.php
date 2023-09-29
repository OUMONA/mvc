<?php
class ContactModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function saveContact($name, $email, $message) {
        try {
            $stmt = $this->conn->prepare('INSERT INTO contact (nom, email, comment) VALUES (:nom, :email, :comment)');
            $stmt->bindParam(':nom', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':comment', $message);
            return $stmt->execute();
        } catch(PDOException $e) {
            echo 'Erreur lors de l\'enregistrement du contact : ' . $e->getMessage();
            return false;
        }
    }
}
?>
