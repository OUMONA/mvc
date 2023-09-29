<!DOCTYPE html>
<html>
<head>
    <title>Erreur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            text-align: center;
        }

        .error-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .error-container h1 {
            color: #d9534f;
        }

        .error-container p {
            margin-bottom: 20px;
        }

        .return-link {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #5bc0de;
            border: 1px solid #46b8da;
            border-radius: 5px;
            text-decoration: none;
        }

        .return-link:hover {
            background-color: #46b8da;
        }
    </style>
</head>
<body>

<?php
if (isset($_GET['code'])) {
    $errorCode = $_GET['code'];

    if ($errorCode == 404) {
        echo "<div class='error-container'>";
        echo "<h1>Erreur 404 - Page non trouvée</h1>";
        echo "<p>Désolé, la page que vous cherchez n'existe pas.</p>";
    } elseif ($errorCode == 408) {
        echo "<div class='error-container'>";
        echo "<h1>Erreur 408 - Timeout</h1>";
        echo "<p>Désolé, la requête a pris trop de temps pour aboutir.</p>";
    } else {
        echo "<div class='error-container'>";
        echo "<h1>Erreur inconnue</h1>";
        echo "<p>Une erreur inconnue est survenue.</p>";
    }
} else {
    echo "<div class='error-container'>";
    echo "<h1>Erreur</h1>";
    echo "<p>Une erreur est survenue, la page que vous recherchez est introuvable.</p>";
}
?>

<!-- Lien pour revenir à la page d'accueil -->
<a class="return-link" href="/mvc/index.php">Retour à la page d'accueil</a>

</div>

</body>
</html>
