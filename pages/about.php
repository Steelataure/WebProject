<?php
$title = "WebRunners";
ob_start();
?>


<body class="sub_page">

  </div>


<?php
include('../includes/section/about_section_page.php');

$content = ob_get_clean();
include '../template/layout.php';
?>
