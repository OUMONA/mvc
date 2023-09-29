<?php
require_once 'Model/Database.php';

class YourController {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function someAction() {
        $conn = $this->db->connect();

        // Votre requête SQL
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Afficher les données
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Nom: " . $row["nom"]. " - Email: " . $row["email"]. "<br>";
            }
        } else {
            echo "Aucun résultat trouvé.";
        }

        // Fermer la connexion
        $conn->close();
    }
}
?>
