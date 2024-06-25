<?php
$title = "Prix - WebRunners";
ob_start();

include("../includes/section/little_slider_section.php");
include('../includes/section/pricing_section.php');

$content = ob_get_clean();
include '../template/layout.php';
?>
