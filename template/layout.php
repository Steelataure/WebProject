<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'WebRunners'; ?></title>

    <link rel="icon" href="/assets/images/logo.ico" type="image/ico">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css">

</head>
<body>
     <?php include '../includes/header.php'; 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>  
    
    <main>
        <?php 
        echo isset($content) ? $content : ''; ?>
    </main>
    
    <?php // include '../includes/footer.php';
    include('../includes/footer.php')
     ?>
    <!-- Intégration des scripts spécifiques au template -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/assets/template.js"></script>
</body>
</html>
