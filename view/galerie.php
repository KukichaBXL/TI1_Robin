<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madrid - Galerie</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
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

    <h2 class="titre-page">Galerie photographique</h2>
    <div class="galerie-grille">

        <div class="galerie-image">
            <a href="img/1280px_Buen_Retiro_Park.jpg"
               data-lightbox="galerie-madrid"
               data-title="Les Caryatides de l'Acropole">
                <img src="img/480px_Buen_Retiro_Park.jpg"
                     alt="Buen Retiro Park">
            </a>
            <p>Buen Retiro Park</p>
        </div>

        <div class="galerie-image">
            <a href="img/1280px_Calle_de_Alcala.jpg"
               data-lightbox="galerie-madrid"
               data-title="Calle de Alcala">
                <img src="img/480px_Calle_de_Alcala.jpg"
                     alt="Calle de Alcala">
            </a>
            <p>Calle de Alcala</p>
        </div>

        <div class="galerie-image">
            <a href="img/1280px_Congreso_de_los_Diputados.jpg"
               data-lightbox="galerie-madrid"
               data-title="Congreso de los Diputados">
                <img src="img/480px_Congreso_de_los_Diputados.jpg"
                     alt="Congreso de los Diputados">
            </a>
            <p>Congreso de los Diputados</p>
        </div>

        <div class="galerie-image">
            <a href="img/1280px_Palacio_de_Comunicaciones.jpg"
               data-lightbox="galerie-madrid"
               data-title="Palacio de Comunicaciones">
                <img src="img/480px_Palacio_de_Comunicaciones.jpg"
                     alt="Palacio de Comunicaciones">
            </a>
            <p>Palacio de Comunicaciones</p>
        </div>

        <div class="galerie-image">
            <a href="img/1280px_Palacio_Real.jpg"
               data-lightbox="galerie-madrid"
               data-title="Palacio_Real">
                <img src="img/480px_Palacio_Real.jpg"
                     alt="Palacio Real">
            </a>
            <p>Palacio Real</p>
        </div>

        <div class="galerie-image">
            <a href="img/1280px_Plaza_de_Colón.jpg"
               data-lightbox="galerie-madrid"
               data-title="Plaza_de_Colón">
                <img src="img/480px_Plaza_de_Colón.jpg"
                     alt="Plaza_de_Colón">
            </a>
            <p>Plaza de Colón</p>
        </div>

    </div>

</div>
</main>

    </div>

<script src="js/lightbox-plus-jquery.js"></script>
<script src="js/menu.js"></script>
</body>
</html>