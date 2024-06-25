<?php
require '../vendor/autoload.php';
require '../config/config_loader.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ob_start();
$pdo = getDatabaseConnection();

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
            $validation_link = "http://webrunners.fr/?page=validation.php&token=$validation_token";

            $mail = new PHPMailer(true);
            try {
                // Charger la configuration SMTP à partir du fichier de configuration
                $config = require '../config/config.php';
                $mail->isSMTP();
                $mail->Host = $config['smtp_host'];
                $mail->SMTPAuth = true;
                $mail->Username = $config['smtp_username']; 
                $mail->Password = $config['smtp_password']; 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = $config['smtp_port'];

                $mail->setFrom($config['smtp_username'], 'WebRunners');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Validation de votre adresse e-mail';
                $mail->Body = "Cliquez sur le lien suivant pour valider votre adresse e-mail : <a href='$validation_link'>$validation_link</a>";

                $mail->send();

                echo 'Inscription réussie. Un e-mail de validation a été envoyé à votre adresse.';
            } catch (Exception $e) {
                echo "Erreur lors de l'envoi de l'e-mail de validation : {$mail->ErrorInfo}";
            }
        } else {
            echo 'Erreur lors de l\'inscription. Veuillez réessayer.';
        }
    }
}
include('../includes/section/register_section.php');

$content = ob_get_clean();
include '../template/layout.php';
?>
