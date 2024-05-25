<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$title = "index";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'login':
        require '../pages/login.php';
        break;
    case 'dashboard':
        if (isset($_SESSION['user_id'])) {
            require '../pages/home.php';
        } else {
            header('Location: index.php?page=login');
            exit();
        }
        break;
    case 'about':
        require 'about.php';
        break;
    case 'home':
        require '../pages/home.php';
        break;
    default:
        require '../pages/home.php';
}

?>
