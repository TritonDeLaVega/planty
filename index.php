<?php
get_header();
?>
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
            <img src="<?php echo get_field('gout_1', 85)["url"]?>" alt="<?php echo get_field('gout_1', 85)["alt"]?>">
            <p class="flavor-text">FRAISE</p>
        </div>
        <div class="flavor">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/estudio-bloom-tOitjphtIXU-unsplash 1.jpg" alt="Pamplemousse">
            <p class="flavor-text">PAMPLE<br>MOUSSE</p>
        </div>
        <div class="flavor">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rodion-kutsaev-4k8xEFW4_3Q-unsplash 1.jpg" alt="Framboise">
            <p class="flavor-text">FRAM<br>BOISE</p>
        </div>
        <div class="flavor">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/estudio-bloom-ezqnxsqUZ80-unsplash 1.jpg" alt="Citron">
            <p class="flavor-text">CITRON</p>
        </div>
    </div>
    <a href="#" class="order-button">Commander</a>
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
        <div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cannettes.jpg" alt="cannettes en fresque">
        </div>
    </div>
</div>
</section>
<?php
get_footer();
?>
