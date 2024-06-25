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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailContent = "Nom: $name\n";
    $mailContent .= "Email: $email\n";
    $mailContent .= "Téléphone: $phone\n";
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

        $mail->setFrom($config['smtp_username'], 'WebRunners Contact Form');
        $mail->addAddress('alexandre0312@orange.fr');

        $mail->isHTML(false);
        $mail->Subject = 'Nouveau message depuis le formulaire de contact';
        $mail->Body = $mailContent;

        $mail->send();

        echo 'Le message a été envoyé avec succès.';
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi du message : {$mail->ErrorInfo}";
    }
}
  
$content = ob_get_clean();
include '../template/layout.php';