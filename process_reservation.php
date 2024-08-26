<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    
    // Missatge d'agraïment
    $subject = "Confirmació de Reserva de Massatge";
    $message = "Hola,\n\nGràcies per fer una reserva amb nosaltres. Esperem que gaudeixis del teu massatge.\n\nSalutacions cordials,\nL'equip de Massatges";
    $headers = "From: no-reply@massatges.com";
    
    // Enviar l'email
    mail($email, $subject, $message, $headers);
    
    // Mostrar confirmació simple
    echo "Reserva realitzada amb èxit! Rebràs un correu electrònic de confirmació aviat.";
} else {
    echo "No s'ha enviat cap formulari.";
}
?>
