<?php
$title = "Profil - WebRunners";
ob_start();

$pdo = getDatabaseConnection();
$username = $_SESSION['username'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$creationDate = new DateTime($user['created_at']);
?>

  <div class="container mx-auto p-4">
        <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Mon Profil</h1>
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Nom d'utilisateur</label>
                <p class="mt-1 text-sm text-gray-900" id="username"><?php echo $user['username'] ?></p>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <p class="mt-1 text-sm text-gray-900" id="email"><?php echo $user['email'] ?></p>
            </div>
            <div class="mb-4">
                <label for="bio" class="block text-sm font-medium text-gray-700">Date de création du compte</label>
                <p class="mt-1 text-sm text-gray-900" id="bio"><?php echo $creationDate->format('Y-m-d')?></p>
            </div>
            <!-- <div class="flex justify-between">
                <a href="#" class="text-sm text-blue-500">Modifier</a>
                <a href="#" class="text-sm text-red-500">Supprimer</a>
            </div> -->
        </div>
    </div>
  <?php
  
$content = ob_get_clean();
include '../template/layout.php';
?>