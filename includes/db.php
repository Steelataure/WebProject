<?php

function getDatabaseConnection() {
    $config = require '../config/config.php';

    try {
        $pdo = new PDO("mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8", $config['username'], $config['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}

function getAllServices($pdo) {
    $query = "SELECT s.service_id, s.name, s.description, s.price, s.recurring_price_monthly, s.recurring_price_annual, c.name AS category_name
              FROM services s
              JOIN categories c ON s.category_id = c.category_id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}
