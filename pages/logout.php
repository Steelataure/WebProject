<?php
ob_start();

$_SESSION = array();
session_destroy();

header("Location: login");
exit;

$content = ob_get_clean();
include '../template/layout.php';
?>
