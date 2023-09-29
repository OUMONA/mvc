<?php
class ContactController {
    // ... Autres méthodes ...

    // Méthode pour gérer l'envoi du formulaire de contact
    public function submitForm() {
        // Vérifier si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $name = $_POST['nom'];
            $email = $_POST['email'];
            $message = $_POST['comment'];

            // Traiter les données du formulaire (par exemple, enregistrement dans la base de données)
            $contactModel = new ContactModel();
            $success = $contactModel->saveContact($name, $email, $message);

            if ($success) {
                // Rediriger l'utilisateur vers une page de succès
                header('Location: /votre-site/contact/success');
                exit();
            } else {
                // En cas d'échec, afficher un message d'erreur
                echo "Une erreur est survenue lors de l'envoi du formulaire.";
            }
        }
    }
}
?>
