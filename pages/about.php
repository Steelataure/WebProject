<?php
$title = "WebRunners";
$meta_description = 'En savoir plus sur WebRunners, notre mission, notre équipe et nos valeurs.';
ob_start();

include('../includes/section/about_section_page.php');

$content = ob_get_clean();
include '../template/layout.php';
?>
