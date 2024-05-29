<?php
$title = "Prix";
ob_start();
?>


<body class="sub_page">
  <?php include("../includes/section/slide_section.php");
  ?>
  </div>
<?php
include('../includes/section/pricing_section.php');

$content = ob_get_clean();
include '../template/layout.php';
?>
