<?php
$title = "WebRunners";
ob_start();

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE validation_token = ?");
    $stmt->execute([$token]);
    $user = $stmt->fetch();

    if ($user) {
        $stmt = $pdo->prepare("UPDATE users SET is_validated = 1, validation_token = NULL WHERE validation_token = ?");
        if ($stmt->execute([$token])) {
            echo 'Votre adresse e-mail a été validée avec succès. Vous pouvez maintenant vous <a href="?page=login">connecter</a>.';
        } else {
            echo 'Erreur lors de la validation de l\'adresse e-mail. Veuillez réessayer.';
        }
    } else {
        echo 'Jeton de validation invalide.';
    }
} else {
    echo 'Aucun jeton de validation fourni.';
}
?>

<?php
$content = ob_get_clean();
include '../template/layout.php';
?>
