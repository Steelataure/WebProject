<?php
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$title = "Register";
ob_start();

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
            $validation_link = "http://161.97.68.235/?page=validate.php&token=$validation_token";

            $mail = new PHPMailer(true);
            try {
                // Configuration du serveur SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp-steel.alwaysdata.net';
                $mail->SMTPAuth = true;
                $mail->Username = 'steel@alwaysdata.net'; 
                $mail->Password = 'aled159753'; 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('steel@alwaysdata.net', 'WebProject');
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
?>

<form method="post" action="?page=register">
    <div>
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="email">Adresse e-mail:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="confirm_password">Confirmer le mot de passe:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
    </div>
    <div>
        <input type="submit" value="S'inscrire">
    </div>
</form>

<?php
$content = ob_get_clean();
include '../template/layout.php';
?>
