<?php
$title = "WebRunners - Login";
ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['isLogged'] = true;
        header("Location: index.php");
        exit();
    } else {
        echo 'Identifiants incorrects.';
    }
}
?>



<section class="login_section layout_padding">
    <div class="container">
    <div class="heading_container heading_center">

        <form method="post" action="?page=login">
            <div>
                <label for="username">Nom d'utilisateur:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>
        <p>Pas de compte ? <a href="?page=register">Inscrivez-vous</a></p>
        </div>
    </div>
</section>


<?php
$content = ob_get_clean();
include '../template/layout.php';
