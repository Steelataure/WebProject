<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'WebProject'; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; 
    require_once '../includes/db.php';
    ?>  
    
    <main>
        <?php echo isset($content) ? $content : ''; ?>
    </main>
    
    <?php include '../includes/footer.php'; ?>
</body>
</html>
