<?php
$title = "WebRunners";
ob_start();

include("../includes/section/slide_section.html");
?>

  </div>
  <?php include('../includes/section/service_section.html'); ?>
  <?php include('../includes/section/about_section.html'); ?>
  <?php include('../includes/section/server_section.html'); ?>
  <?php //include('../includes/section/pricing_section.html'); ?>
  <br><br><br><br><br>
  <?php include('../includes/section/client_section.html'); ?>
  <?php include('../includes/section/contact_section.html'); ?>
  
<?php
$content = ob_get_clean();
include '../template/layout.php';
?>
