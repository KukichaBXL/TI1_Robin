<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucfirst($_GET['p']) ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
    require_once '../view/inc/entete.php';
    ?>

    <div class="conteneur">

        <?php
        require '../view/inc/menu.php';
        ?>

<div class="contenu-page">

    <h2 class="titre-page">Erreur 404</h2>

    <div class="img-centree">
        <img src="img/404.jpg" alt="Erreur 404 - Page introuvable">
    </div>

    <p>
        Malheureusement nous avons rencontré un problème.
    </p>
    <p>
        <a href="./">← Retourner à l'accueil</a>
    </p>

</div>
</main>

    </div>

<script src="js/darkmode.js"></script>
<script src="js/menu.js"></script>
</body>
</html>