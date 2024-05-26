<?php
$title = "Confirmation d'activation";
ob_start();

if (isset($_GET['status']) && $_GET['status'] == 'success') {
    echo '<p>Votre compte a été activé avec succès. Vous pouvez maintenant vous connecter.</p>';
} else {
    echo '<p>Le lien d\'activation est invalide ou le compte est déjà activé.</p>';
}

$content = ob_get_clean();
include '../template/layout.php';
?>
