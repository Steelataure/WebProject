<?php
$title = "Activation du compte";
ob_start();

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $stmt = $pdo->prepare('SELECT * FROM users WHERE token = ? AND status = ?');
    $stmt->execute([$token, 'non activé']);
    $user = $stmt->fetch();

    if ($user) {
        $stmt = $pdo->prepare('UPDATE users SET status = ? WHERE token = ?');
        $stmt->execute(['activé', $token]);
        header('Location: ?page=confirmation&status=success');
        exit();
    } else {
        echo 'Le lien d\'activation est invalide ou le compte est déjà activé.';
    }
} else {
    echo 'Aucun token fourni.';
}

$content = ob_get_clean();
include '../template/layout.php';
?>
