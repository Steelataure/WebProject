<?php
$title = "Contact - WebRunners";
$meta_description = 'Contactez-nous pour toute demande d\'information ou de devis, nous sommes à votre écoute.';

ob_start();
?>

<body class="sub_page">
    
  </div>

  <?php
  
include('../includes/section/contact_section.php');
$content = ob_get_clean();
include '../template/layout.php';
?>