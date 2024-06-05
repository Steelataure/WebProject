<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$title = "WebRunners";
require_once '../includes/db.php';
require '../vendor/autoload.php';

//dump($_SESSION);

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'login':
        require '../pages$$$$/login.php';
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
    case 'home':
        require '../pages/home.php';
        // if (isset($_SESSION['user_id'])) {
        //     require '../pages/home.php';
        // } else {
        //     header('Location: index.php?page=login');
        //     exit();
        // }
        break;
    case 'about':
        require 'about.php';
        break;
    case 'contact':
        require 'contact.php';
        break;
    case 'register':
        require '../pages/register.php';
        break;
    case 'shop':
        require '../pages/shop.php';
        break;
    default:
        require '../pages/404.php';
}

?>
