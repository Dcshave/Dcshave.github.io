<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

// Paramètres de l'e-mail
$destinataire = 'votre@email.com';
$sujet = 'Nouveau message du formulaire de contact';

// Construire le corps de l'e-mail
$corps_message = "Nom : $nom\n";
$corps_message .= "Email : $email\n";
$corps_message .= "Message : $message\n";

// En-têtes de l'e-mail
$headers = "From: $nom <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Envoyer l'e-mail
if (mail($destinataire, $sujet, $corps_message, $headers)) {
    // Succès de l'envoi de l'e-mail
    echo "Votre message a été envoyé avec succès.";
} else {
    // Échec de l'envoi de l'e-mail
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
?>
