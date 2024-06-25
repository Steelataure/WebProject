<?php
require '../vendor/autoload.php';
require '../config/config_loader.php';

$title = "Contact - WebRunners";
$meta_description = 'Contactez-nous pour toute demande d\'information ou de devis, nous sommes à votre écoute.';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ob_start();
$pdo = getDatabaseConnection();

// Charger la configuration SMTP à partir du fichier de configuration
$config = require '../config/config.php';
include('../includes/section/contact_section.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // Validation des entrées
    if (empty($name) || empty($email) || empty($message)) {
        echo 'Tous les champs obligatoires doivent être remplis.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Adresse e-mail invalide.';
    } else {
        $mailContent = "Nom: $name\n";
        $mailContent .= "Email: $email\n";
        $mailContent .= "Telephone: $phone\n";
        $mailContent .= "Message:\n$message\n";

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = $config['smtp_host'];
            $mail->SMTPAuth = true;
            $mail->Username = $config['smtp_username'];
            $mail->Password = $config['smtp_password'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = $config['smtp_port'];

            $mail->setFrom($config['smtp_username'], 'WebRunners');
            $mail->addAddress($config['recipient']);

            $mail->isHTML(true);
            $mail->Subject = 'Nouveau message depuis le formulaire de contact';
            $mail->Body = nl2br($mailContent);

            $mail->send();
            
            echo 'Le message a été envoyé avec succès.';
        } catch (Exception $e) {
            error_log("Erreur lors de l'envoi du message : {$mail->ErrorInfo}");
            echo "Erreur lors de l'envoi du message. Veuillez réessayer plus tard.";
        }
    }
}
  
$content = ob_get_clean();
include '../template/layout.php';
?>
