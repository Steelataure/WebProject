<?php
require '../vendor/autoload.php';
require '../config/config_loader.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$title = "WebRunners";
ob_start();
$pdo = getDatabaseConnection(); // Obtenir la connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

    if ($password !== $confirm_password) {
        echo 'Les mots de passe ne correspondent pas.';
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $validation_token = bin2hex(random_bytes(50));

        $stmt = $pdo->prepare("INSERT INTO users (username, password, email, validation_token) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$username, $hashed_password, $email, $validation_token])) {
            // Code pour l'envoi de l'e-mail de validation avec PHPMailer
            // Assurez-vous de configurer PHPMailer correctement

            echo 'Inscription réussie. Un e-mail de validation a été envoyé à votre adresse.';
        } else {
            echo 'Erreur lors de l\'inscription. Veuillez réessayer.';
        }
    }
}
?>
<body class="sub_page">
    </div>
<?php
include('../includes/section/register_section.php');

$content = ob_get_clean();
include '../template/layout.php';
?>
