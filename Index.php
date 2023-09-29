<?php
// Inclure les fichiers nécessaires
require_once 'controllers/HomeController.php';
require_once 'controllers/ContactController.php';
require_once 'controllers/ErrorController.php';

// Obtenir l'URL et les segments
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$urlSegments = explode('/', $url);

// Déterminer le contrôleur et la méthode à appeler
$controllerName = ucfirst($urlSegments[0]) . 'Controller';
$methodName = isset($urlSegments[1]) ? $urlSegments[1] : 'index';

// Instancier le contrôleur approprié
if (class_exists($controllerName)) {
    $controller = new $controllerName();
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        $errorController = new ErrorController();
        $errorController->error404();
    }
} else {
    $errorController = new ErrorController();
    $errorController->error404();
}
