<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$title = "WebRunners";
require_once '../includes/db.php';
require '../vendor/autoload.php';

$url_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$page = $url_path ? $url_path : 'home';

switch ($page) {
    case 'login':
        require '../pages/login.php';
        break;
    case 'logout':
        require '../pages/logout.php';
        break;
    case 'validation':
        require '../pages/validation.php';
        break;
    case 'price':
        require '../pages/price.php';
        break;
    case 'service':
        require '../pages/service.php';
        break;
    case '':
    case '/':
    case 'home':
        require '../pages/home.php';
        break;
    case 'about':
        require '../pages/about.php';
        break;
    case 'contact':
        require '../pages/contact.php';
        break;
    case 'register':
        require '../pages/register.php';
        break;
    case 'devis':
        require '../pages/devis.php';
        break;
    default:
        require '../pages/404.php';
        break;
}
