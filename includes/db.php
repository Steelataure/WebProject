<?php


require '../config/config_loader.php';
$config = require '../config/config.php';

$host = $config['host']; 
$dbname = $config['dbname'];
$username = $config['username'];
$password = $config['password'];

try {
    $pdo = new PDO("mysql:host=$host:3306;dbname=$dbname;charset=utf8", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
