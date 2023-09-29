<!DOCTYPE html>
<html lang="fr">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>
			ldscampus brazzaville
		</title>
		 <link rel="icon" href="/mvc/assets/img/logo.jpg" type="image/jpg">
<!-- Les liens avec link -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"/>
		<link rel="stylesheet" href="bootstrap.min.css"/>
		<link rel="stylesheet" href="/mvc/assets/css/index.css">
		<base href="http://localhost/mvc/">
</head>
<body>
    <?php
include "CONNECT.php";

// Variables pour stocker les messages et les classes d'alerte
$alertMessage = "";
$alertClass = "";

// Vérifier si une alerte a été définie dans la session précédente
session_start();
if (isset($_SESSION['alertMessage']) && isset($_SESSION['alertClass'])) {
    $alertMessage = $_SESSION['alertMessage'];
    $alertClass = $_SESSION['alertClass'];
    // Supprimer les valeurs de la session pour qu'elles ne s'affichent qu'une fois
    unset($_SESSION['alertMessage']);
    unset($_SESSION['alertClass']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les données du formulaire existent et ne sont pas vides
    if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["comment"])) {
        $nom = mysqli_real_escape_string($conn, $_POST["nom"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $comment = mysqli_real_escape_string($conn, $_POST["comment"]);

        // Requête préparée pour l'insertion
        $stmt = mysqli_prepare($conn, "INSERT INTO contact (nom, email, comment) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $nom, $email, $comment);
        mysqli_stmt_execute($stmt);

        // Vérifier si l'insertion a réussi
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            $alertMessage = "Les informations ont été envoyées avec succès.";
            $alertClass = "success";
        } else {
            $alertMessage = "Échec de l'envoi des informations.";
            $alertClass = "danger";
        }

        // Stocker les valeurs dans la session
        $_SESSION['alertMessage'] = $alertMessage;
        $_SESSION['alertClass'] = $alertClass;

        // Fermer la requête
        mysqli_stmt_close($stmt);
    }
    
    // Fermer la connexion à la base de données
    mysqli_close($conn);
}
?>

    <nav>
		<div class="nav-image">
            <img src="/mvc/assets/img/logo.jpg" alt="Description de l'image">
        </div>
		
		<div class="navbar-links" >
			<ul class="menu">
				<li><a href="/mvc/index.php">Accueil</a></li>
				<li><a href="views/programme.php">Programme</a></li>
				<li><a href="views/activite.php">Activités</a></li>
				<li><a href="views/organisation.php">Histoire & Organisation</a></li>
			</ul>
		</div>
		<!-- L'image dans la nav -->
		
		<!-- LES BOUTONS HAMBURGERS -->
		<!-- LES BOUTONS HAMBURGERS -->
		<div class="menu-icon">
			<div class="menu-icon__line"></div>
			<div class="menu-icon__line"></div>
			<div class="menu-icon__line"></div>
		</div>
		
    </nav>

	<header>
        <h1>Bienvenue,<br/> sur le Campus de l'Institut de Religion de Marien Ngouabi</h1>
        <p>Explorez notre campus universitaire dédié à la foi et à l'éducation.</p>
    </header>
	<!-- Le slider -->
<!-- Le slider -->
<section class="Sliding">
    <div class="container">
        <div class="slider">
            <div class="slides-container">
                <div class="slide">
                    <img src="/mvc/assets/img/A.jpg" alt="" class="slide-img">
					</div>
                <div class="slide">
                    <img src="/mvc/assets/img/D.jpg" alt="" class="slide-img">
                </div>
				
				<div class="slide">
                    <img src="/mvc/assets/img/Q.jpg" alt="" class="slide-img">
                </div>
				
				<div class="slide">
                    <img src="/mvc/assets/img/F.jpg" alt="" class="slide-img">
                </div>
				
				<div class="slide">
                    <img src="/mvc/assets/img/nj.jpg" alt="" class="slide-img">
                </div>
				
				<div class="slide">
                    <img src="/mvc/assets/img/B.jpg" alt="" class="slide-img">
                </div>
				
				<div class="slide">
                    <img src="/mvc/assets/img/B.jpg" alt="" class="slide-img">
                </div>
				
				<div class="slide">
                    <img src="/mvc/assets/img/B.jpg" alt="" class="slide-img">
                </div>
                <!-- Ajoute d'autres slides ici -->
            </div>
        </div>
    </div>
</section>



	

	
	
	<section class="coordinator-section">
		<h2>Message du Coordonateur du Campus</h2>
		<div class="coordinator-info">
			<img src="/mvc/assets/img/follow.jpg" alt="Coordinateur">
			<p>
				Frères et sœurs, nous vous souhaitons la bienvenue au campus de l'Institut de Religion de l'Église de Jésus-Christ des Saints des Derniers Jours. Les campus de l'Institut de Religion font partie du système éducatif de l'Église. Notre objectif est d'aider les jeunes et les jeunes adultes seuls à comprendre les enseignements et l'expiation du Seigneur Jésus-Christ, ainsi qu'à y trouver du réconfort.
				Les qualifiés pour recevoir les bénédictions de la Sainte Maison de Dieu sont préparés, eux et leurs familles, pour la vie éternelle avec notre Père céleste dans les cieux. Le Seigneur a expliqué à Joseph Smith, le prophète : "La gloire de Dieu, c'est l'intelligence, ou en d'autres termes, la lumière et la vérité" (D&A 93:36-37).

				Le campus est un endroit où nous accroissons notre connaissance du Seigneur Jésus-Christ et de son Évangile éternel. Grâce à cette lumière de vérité, nous devenons de véritables disciples du Seigneur Jésus-Christ. Le cours dispensé sur le campus pour mieux connaître Jésus-Christ est appelé le cours d'Institut de Religion. Les étudiants du campus ont également la bénédiction d'apprendre gratuitement l'anglais, l'informatique et d'autres cours importants qui peuvent les aider à renforcer leurs compétences. Pour en savoir davantage, nous vous invitons à visiter le Campus de l'Institut de Religion. Au campus, nous formons une famille et nous nous préoccupons du bien-être de chacun. Une atmosphère de paix et d'amour y règne. Nous vous aimons et nous serions honorés de vous accueillir un jour.

				Au nom de Jésus-Christ.
				Amen
			</p>
		</div>
	</section><br/>
	
    <section class="v">
		<h2>Vidéos du Campus</h2>
        <p>Découvrez notre campus à travers ces vidéos captivantes.</p>

	</section>
	
	<section class="video-section">
		
		<div class="videos-grid">
			<div class="video-item" style='height:10%'>
				<video controls>
					<source src="/mvc/assets/video/x90.mp4" type="video/mp4">
					<!-- <source src="x90.mp4" type="video/mp4"> -->
					Votre navigateur ne prend pas en charge la lecture de la vidéo.
				</video>
			</div>

			<div class="video-item" style='height:10%'>
				<video controls>
					<source src="/mvc/assets/video/x11.mp4" type="video/mp4">
					<!-- <source src="x11.mp4" type="video/mp4"> -->
					Votre navigateur ne prend pas en charge la lecture de la vidéo.
				</video>
			</div>
		</div>
	</section>


   

    <section class="contact-form">
        <h2 style='color:#C28686'>Nous Contacter</h2>
        <p>veuillez nous contacter en remplissant le formulaire ci-dessous :</p><br/>
        <form action="#" method="post" id="form">
		
			<div class="inputBox">
				<label for="name">Nom :</label>
				<input type="text" id="nom" name="nom" size="50"  required>
				<div class="error-1" style="font-size:12px"></div>
			</div><br/>
			
			<div class="inputBox">
				<label for="email">Adresse e-mail :</label>
				<input type="text" id="email" name="email" size="25"  required>
				<div class="error-2" style="font-size:12px"></div>
			</div><br/>
			
			<div class="inputBox" >
				<label for="message">Message :</label>
				<textarea id="comment" name="comment" rows="5" required></textarea>
				<div class="error-3" style="font-size:12px; margin-top:-10px"></div>
			</div>
			
			<!-- Le bouton -->
            <button id="btn" type="submit" style='margin-top:10px'>Envoyer</button>
        </form>
    </section><br/><br/><br/>
	
	<!-- Affichage des alertes Bootstrap -->
	<?php if (!empty($alertMessage)) { ?>
		<div class="alert custom-alert alert-<?php echo $alertClass; ?>" role="alert">
			<?php echo $alertMessage; ?>
		</div>
		<script>
			// Fermer l'alerte après 5 secondes
			setTimeout(function(){
				document.querySelector('.custom-alert').style.display = 'none';
			}, 5000);
		</script>
	<?php } ?>

    <footer>
        <p>&copy; 2023 Campus de l'Église de Jésus-Christ des Saints des Derniers Jours - Tous droits réservés.</p>
    </footer>
	
	<script src="/mvc/assets/js/Jquery.js"></script>
	<script src="/mvc/assets/js/menu-hamburger.js" ></script>
	<!-- Je traite mon formulaire ici avec le Jquery, il traite le formulaire  -->
	<script type="text/javascript" src="/mvc/assets/js/acceuil.js" ></script>
	
</body>
</html>
