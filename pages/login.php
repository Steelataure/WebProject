<?php

$title = "Login - WebRunners";
$meta_description = 'Connectez-vous à votre compte pour accéder à vos services personnalisés.';

ob_start();

$pdo = getDatabaseConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['isLogged'] = true;
        
        setcookie('username', $user['username'], time() + (86400 * 30), "/", "", false, true);

        header("Location: /");
        exit();
    } else {
        echo 'Identifiants incorrects.';
    }
}
?>

<!---------------------------------------->
<?php

include('../includes/section/login_section.html');

$content = ob_get_clean();
include '../template/layout.php';
