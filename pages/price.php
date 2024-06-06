<?php
$title = "Prix - WebRunners";
ob_start();
?>


<body class="sub_page">
  <?php include("../includes/section/little_slider_section.php");
  ?>
  </div>
<?php
include('../includes/section/pricing_section.php');

$content = ob_get_clean();
include '../template/layout.php';
?>
