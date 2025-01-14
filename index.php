<?php
get_header();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/home.css">
</head>
<body>
<section>
<div class="main-banner">
    <h1>BOISSON ÉNERGISANTE<br>100% NATURELLE</h1>
    <div class="image-composition">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feuille gauche.png" alt="Feuille gauche" class="feuille gauche">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/canette.png" alt="Cannette Planty" class="canette">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feuille droite.png" alt="Feuille droite" class="feuille droite">
    </div>
</div>
</section>

<section>
<div class="plant-energy">
    <h2>L'énergie des plantes</h2>
    <p> 
        <?php echo get_field('texte_sur_planty', 85);?>
    </p>
</div>
</section>

<section>
<div class="flavors">
    <h2>LES GOÛTS</h2>
    <p>Nous avons une saveur pour chaque moment de votre journée.</p>
    <div class="flavor-list">
        <div class="flavor">
            <img src="<?php echo get_field('image_gout_1', 85)["url"]?>" alt="<?php echo get_field('image_gout_1', 85)["alt"]?>">
            <p class="flavor-text"><?php echo strtoupper(get_field('nom_gout_1', 85))?></p>
        </div>
        <div class="flavor">
            <img src="<?php echo get_field('image_gout_2', 85)["url"]?>" alt="<?php echo get_field('image_gout_2', 85)["alt"]?>">
            <p class="flavor-text"><?php echo strtoupper(get_field('nom_gout_2', 85))?></p>
        </div>
        <div class="flavor">
            <img src="<?php echo get_field('image_gout_3', 85)["url"]?>" alt="<?php echo get_field('image_gout_3', 85)["alt"]?>">
            <p class="flavor-text"><?php echo strtoupper(get_field('nom_gout_3', 85))?></p>
        </div>
        <div class="flavor">
            <img src="<?php echo get_field('image_gout_4', 85)["url"]?>" alt="<?php echo get_field('image_gout_4', 85)["alt"]?>">
            <p class="flavor-text"><?php echo strtoupper(get_field('nom_gout_4', 85))?></p>
        </div>
    </div>
    <a href="<?php echo home_url('/commander/'); ?>" class="order-button">Commander</a>
</div>
</section>
<section>
<div class="testimonials">
    <h2>CE QU'ILS EN PENSENT</h2>
    <div class="testimonial-container">
        <div class="testimonial">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pfemme.jpg" alt="Fatiha">
            <p><strong>Fatiha</strong><br>La meilleure boisson<br>énergisante disponible sur<br>le marché !</p>
        </div>
        <div class="testimonial">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pmaman.jpg" alt="Véro">
            <p><strong>Véro</strong><br>Frais & fruité c’est parfait<br>pour accompagner<br>le goûter.</p>
        </div>
        <div class="testimonial">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Phomme.jpg" alt="Marc">
            <p><strong>Marc</strong><br>Un boost d’énergie sans<br>produits chimiques, un vrai<br>plus dans ma journée.</p>
        </div>
    </div>
</div>
<div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cannettes.png" alt="cannettes en fresque" class="cannettes">
</div>
</section>

<?php
get_footer();
?>
</body>
</html>
