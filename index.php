<?php
get_header();
?>
<section>
<div class="main-banner">
    <h1><?php echo get_field('titre_banniere', 85); ?></h1>
    <div class="image-composition">
        <img src="<?php echo get_field('feuille_gauche', 85)['url']; ?>" alt="<?php echo get_field('feuille_gauche', 85)['alt']; ?>" class="feuille gauche">
        <img src="<?php echo get_field('canette', 85)['url']; ?>" alt="<?php echo get_field('canette', 85)['alt']; ?>" class="canette">
        <img src="<?php echo get_field('feuille_droite', 85)['url']; ?>" alt="<?php echo get_field('feuille_droite', 85)['alt']; ?>" class="feuille droite">
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
