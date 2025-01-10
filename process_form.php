<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {
        echo "Merci, $name ! Votre message a été envoyé.";
    } else {
        echo "Veuillez vérifier que tous les champs sont remplis correctement.";
    }
}
?>
