<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Adresse e-mail de destination
    $destinataire = "randriamiadanarivo.ranto@outlook.fr";
    
    // Sujet de l'e-mail
    $sujet = "Nouveau message depuis le formulaire de contact";
    
    // Corps de l'e-mail
    $corps_message = "Nom : $nom\n";
    $corps_message .= "Adresse e-mail : $email\n";
    $corps_message .= "Message :\n$message";
    
    // En-têtes de l'e-mail
    $entetes = "From: $email\r\n";
    
    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $corps_message, $entetes)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du message.";
    }
}
?>
