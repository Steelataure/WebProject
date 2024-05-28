<?php
$title = "WebRunners";
ob_start();
?>

<body class="sub_page">

  </div>
  <?php

include('../includes/section/large_service_section.php');

$content = ob_get_clean();
include '../template/layout.php';
?>
