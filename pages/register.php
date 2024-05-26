<?php
$title = "Inscription";
ob_start();
?>

<form method="POST" action="?page=register">
    <label for="username">Nom d'utilisateur:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="S'inscrire">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
    $stmt->execute([$username, $email, $password]);

    echo 'Inscription réussie. Vous pouvez maintenant vous connecter.';
}

$content = ob_get_clean();
include '../template/layout.php';
?>
