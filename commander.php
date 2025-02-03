<?php
get_header();
/*
Template Name: Commander
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et valider les quantités commandées
    $flavors = [
        'fraise' => filter_input(INPUT_POST, 'gout_fraise', FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]) ?: 0,
        'pamplemousse' => filter_input(INPUT_POST, 'gout_pamplemousse', FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]) ?: 0,
        'framboise' => filter_input(INPUT_POST, 'gout_framboise', FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]) ?: 0,
        'citron' => filter_input(INPUT_POST, 'gout_citron', FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]) ?: 0,
    ];

    $customer_info = [
        'name' => htmlspecialchars($_POST['name'] ?? ''),
        'surname' => htmlspecialchars($_POST['surname'] ?? ''),
        'email' => filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL),
        'address' => htmlspecialchars($_POST['address'] ?? ''),
        'zip' => htmlspecialchars($_POST['zip'] ?? ''),
        'city' => htmlspecialchars($_POST['city'] ?? '')
    ];

    // Valider l'email
    if (!filter_var($customer_info['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email invalide.";
        exit;
    }

    // Contenu du message
    $message = "Commande de : " . $customer_info['name'] . " " . $customer_info['surname'] . "\n\n";
    $message .= "Email: " . $customer_info['email'] . "\n";
    $message .= "Adresse: " . $customer_info['address'] . "\n";
    $message .= "Code Postal: " . $customer_info['zip'] . "\n";
    $message .= "Ville: " . $customer_info['city'] . "\n\n";
    $message .= "Détails de la commande : \n";

    foreach ($flavors as $flavor => $quantity) {
        $message .= ucfirst($flavor) . ": " . $quantity . " unité(s)\n";
    }

    // Envoi des emails (admin + client) avec wp_mail
    $admin_email = "planty.drinks@gmail.com";
    $client_email = $customer_info['email'];

    // Envoi de l'email à l'administrateur
    wp_mail($admin_email, "Nouvelle commande", $message, ['From: no-reply@' . $_SERVER['SERVER_NAME']]);

    // Envoi de l'email au client
    wp_mail($client_email, "Confirmation de commande", "Votre commande a été reçue :\n" . $message, ['From: no-reply@example.com']);

    // Redirection vers une page de confirmation
    wp_redirect(home_url('/confirmation-de-commande/'));
    exit;
}
?>

<div class="commander-page">
    <section class="commande-header">
        <h1>COMMANDER</h1>
    </section>
    <hr class="separator">

    <form method="POST">
        <section class="order-gouts">
            <h2>Votre commande</h2>
            <?php if (is_page(93)) : ?>
            <div class="gout-options">
                <div class="gout">
                    <div class="gout-container">
                        <img src="<?php echo get_field('gout_1', 93)["url"] ?>" alt="<?php echo get_field('gout_1', 93)["alt"] ?>">
                        <p class="gout-name">FRAISE</p>
                    </div>
                    <input type="number" name="gout_fraise" min="0" value="0" class="quantity">
                </div>
                <div class="gout">
                    <div class="gout-container">
                        <img src="<?php echo get_field('gout_2', 93)["url"] ?>" alt="<?php echo get_field('gout_2', 93)["alt"] ?>">
                        <p class="gout-name">PAMPLE<br>MOUSSE</p>
                    </div>
                    <input type="number" name="gout_pamplemousse" min="0" value="0" class="quantity">
                </div>
                <div class="gout">
                    <div class="gout-container">
                        <img src="<?php echo get_field('gout_3', 93)["url"] ?>" alt="<?php echo get_field('gout_3', 93)["alt"] ?>">
                        <p class="gout-name">FRAM<br>BOISE</p>
                    </div>
                    <input type="number" name="gout_framboise" min="0" value="0" class="quantity">
                </div>
                <div class="gout">
                    <div class="gout-container">
                        <img src="<?php echo get_field('gout_4', 93)["url"] ?>" alt="<?php echo get_field('gout_4', 93)["alt"] ?>">
                        <p class="gout-name">CITRON</p>
                    </div>
                    <input type="number" name="gout_citron" min="0" value="0" class="quantity">
                </div>
            </div>
            <?php endif; ?>
            <hr class="separator">
        </section>

        <section class="information-forms">
            <div class="form-container">
                <h3>Vos informations</h3>
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" required>
                <label for="surname">Prénom:</label>
                <input type="text" id="surname" name="surname" required>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="separator-vertical"></div>
            <div class="form-container">
                <h3>Livraison</h3>
                <label for="address">Adresse de livraison:</label>
                <input type="text" id="address" name="address" required>
                <label for="zip">Code postal:</label>
                <input type="text" id="zip" name="zip" required>
                <label for="city">Ville:</label>
                <input type="text" id="city" name="city" required>
            </div>
        </section>

        <section class="order-button-section">
            <button type="submit" class="order-button">Commander</button>
        </section>
    </form>
</div>

<?php
get_footer();
?>
