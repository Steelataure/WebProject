<?php
$title = "Boutique";
ob_start();
?>


<?php
$content = ob_get_clean();
include '../template/layout.php';
?>
