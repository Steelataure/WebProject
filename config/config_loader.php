<?php
$configFile = __DIR__ . '/config.php';
$configFileDist = __DIR__ . '/config.php.dist';

if (file_exists($configFile)) {
    $config = require $configFile;
} elseif (file_exists($configFileDist)) {
    $config = require $configFileDist;
} else {
    die('Fichier de configuration manquant.');
}
return $config;
?>
