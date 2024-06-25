<?php
$title = "WebRunners";
$meta_description = 'Découvrez nos services de développement de site vitrine, développement full stack et administration d\'architecture pour une présence en ligne optimale.';

ob_start(); 

include('../includes/section/service_section.php');

$content = ob_get_clean();
include '../template/layout.php';
?>
