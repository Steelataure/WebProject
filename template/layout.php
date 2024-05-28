<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'WebProject'; ?></title>
    <link rel="icon" href="/assets/images/logo.ico" type="image/ico">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/styles.css">

</head>
<body>
     <?php include '../includes/headertemp.php'; 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>  
    
    <main>
        <?php 
        echo isset($content) ? $content : ''; ?>
    </main>
    
    <?php // include '../includes/footer.php';
    include('../includes/info_section.php')
     ?>
    <!-- Intégration des scripts spécifiques au template -->
    <script src="/path/to/template.js"></script>
</body>
</html>
