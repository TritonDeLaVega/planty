<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message_content = htmlspecialchars($_POST['message']);

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message_content)) {
        $to = 'planty.drinks@gmail.com'; // Adresse email du destinataire
        $subject = 'Nouveau message de contact';
        $message = "Nom: $name\nE-mail: $email\nMessage:\n$message_content";
        $headers = ['From: ' . $email, 'Reply-To: ' . $email];
        
        // Envoi de l'email
        if (wp_mail($to, $subject, $message, $headers)) {
            echo "Merci, $name ! Votre message a été envoyé.";
        } else {
            echo "Erreur lors de l'envoi de votre message. Veuillez réessayer.";
        }
    } else {
        echo "Veuillez vérifier que tous les champs sont remplis correctement.";
    }
}
?>
