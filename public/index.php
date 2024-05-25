<?php
$title = "Accueil";
ob_start();
?>

<h2>Page d'accueil</h2>
<p>On recherche toujours le nom du projet donc bon...</p>

<?php
$content = ob_get_clean();
include '../template/layout.php';
?>
