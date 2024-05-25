<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'WebProject'; ?></title>
    <link rel="icon" href="/assets/images/logo.ico" type="image/ico">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <?php include '../includes/header.php'; 
    require_once '../includes/db.php';
    ?>  
    
    <main>
        <?php echo isset($content) ? $content : ''; ?>
    </main>
    
    <?php// include '../includes/footer.php'; ?>
</body>
</html>
