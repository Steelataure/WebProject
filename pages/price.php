<?php
$title = "Prix - WebRunners";
ob_start();

include("../includes/section/little_slider_section.html");
include('../includes/section/pricing_section.html');

$content = ob_get_clean();
include '../template/layout.php';
?>
