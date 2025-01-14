<?php
get_header();
/*
Template Name: Nous Rencontrer
*/
?>

<section class="section-rencontrer">
    <h1>NOUS RENCONTRER</h1>
    <p>Chez Planty nous sommes tous passionnés par le bien-être, et ça se retrouve dans nos boissons ! Notre start-up s’est construite au fur et à mesure de rencontres entre amoureux des plantes.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Group 2.png" alt="Rencontre">
</section>

<section class="section-equipe">
    <h2>L'équipe</h2>
    <div class="team-member">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Mask group-2.jpg" alt="Mégane">
        <p>Mégane</p>
        <p class="role">CEO</p>
    </div>
    <div class="team-member">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Mask group-1.jpg" alt="Brooke">
        <p>Brooke</p>
        <p class="role">Nutritionniste</p>
    </div>
    <div class="team-member">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Mask group.jpg" alt="Sylvie">
        <p>Sylvie</p>
        <p class="role">Mixologue</p>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feuille gauche.png" alt="Feuille" class="feuille">
</section>

<section class="section-contact">
    <h2>Nous rencontrer</h2>
    <form method="post" action="process_form.php">
    <label for="name">Nom</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" required>
    
    <label for="message">Message</label>
    <div class="message-container">
        <textarea id="message" name="message" rows="4" maxlength="250" required style="resize: none;"></textarea>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/houx.png" alt="Décoration angle" class="angle-decoration">
    </div>
    
    <button type="submit" class="submit-button">Envoyer</button>
</form>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cannettes.png" alt="Fresque des cannettes" class="fresque">
</section>


<?php
get_footer();
?>
