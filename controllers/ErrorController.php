<?php
class ErrorController {
    public function error404() {
        // Charger la vue de l'erreur 404
        require 'views/error.php';
    }

    public function error408() {
        // Charger la vue de l'erreur 408 (Timeout)
        require 'views/error.php';
    }
}
?>
