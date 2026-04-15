<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madrid - Accueil</title>
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

    <h2 class="titre-page">Bienvenue sur notre site sur Madrid</h2>

    <div class="img-centree">
        <img src="img/armoiries.png" alt="Armoiries d'Madrid">
    </div>

    <p>
   Madrid est la capitale et la plus grande ville d'Espagne. Située dans la partie centrale du royaume, elle est également la capitale et la ville la plus peuplée de la Communauté de Madrid. En tant que capitale d'État, elle abrite la plupart des institutions politiques du pays, dont la résidence royale, le siège du gouvernement et le Parlement.
    </p>

    <p>
    Elle compte une population d'environ 3,3 millions d'habitants intra-muros sur une superficie totale de 604,3 km2, au sein d'une aire urbaine d'environ 6,5 millions d'habitants en 2014. En comptant sa population intra-muros, Madrid est la deuxième ville de l'Union européenne, derrière Berlin.
    </p>
    <p>
    Ville mondiale, elle abrite le siège de nombreuses institutions, dont l'Organisation mondiale du tourisme, l'Organisation des États Ibéro-américains, l'Académie royale espagnole et l'Institut Cervantes. Considérée comme l'une des principales places financières de l'Europe du Sud, elle partage le statut de cœur économique de l'Espagne avec Barcelone. Elle accueille le siège social des plus grandes entreprises du pays, comme Telefónica, Repsol ou Iberia.
    </p>
    <p>
    Les bâtiments d'architecture récente côtoient des constructions de style néo-classique, telles que la porte d'Alcalá, la place de Cybèle ou la cathédrale de l'Almudena. Ville d'art, ses trois principaux musées, le musée du Prado, le musée Reina Sofía et le musée Thyssen-Bornemisza, comptent parmi les plus visités au monde. En outre, Madrid abrite deux des plus grands clubs de football au monde, le Real Madrid et l'Atlético de Madrid.

    </p>

     <div class="center">
        <h3>Sommaire</h3>
    </div>
    <ul class="sommaire">
        <li><a href="./?p=geographie">Géographie</a></li>
        <li><a href="./?p=histoire">Histoire</a></li>
        <li><a href="./?p=culture">Culture</a></li>
        <li><a href="./?p=galerie">Galerie</a></li>
        <li><a href="./?p=contact">Contact</a></li>
        <li><a href="./?p=liens">Liens</a></li>
    </ul>

    <p class="reference">
        Source :
        <a href="https://fr.wikipedia.org/wiki/Ath%C3%A8nes" target="_blank">
            Wikipédia – Madrid
        </a>
    </p>

</div>
</main>

    </div>

<script src="js/darkmode.js"></script>
<script src="js/menu.js"></script>
</body>
</html>