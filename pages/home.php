<?php
$title = "WebRunners";
ob_start();

include("../includes/section/slide_section.php");
?>

  </div>
  <?php include('../includes/section/service_section.php'); ?>
  <?php include('../includes/section/about_section.php'); ?>
  <?php include('../includes/section/server_section.php'); ?>
  <?php include('../includes/section/pricing_section.php'); ?>
  <?php include('../includes/section/client_section.php'); ?>
  <?php include('../includes/section/contact_section.php'); ?>
  
<?php
$content = ob_get_clean();
include '../template/layout.php';
?>
