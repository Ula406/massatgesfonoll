<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $temps = $_POST['temps'];
    $suplements = isset($_POST['suplements']) ? implode(", ", $_POST['suplements']) : "Sense suplements";

    // Missatge de confirmació
    echo "Reserva realitzada amb èxit!<br>";
    echo "Adreça electrònica: $email<br>";
    echo "Temps: $temps<br>";
    echo "Suplements: $suplements<br>";

    // Enviar correu electrònic
    $to = $email;
    $subject = "Confirmació de reserva de massatge";
    $message = "Gràcies per la teva reserva!\n\n";
    $message .= "Detalls de la reserva:\n";
    $message .= "Temps: $temps\n";
    $message .= "Suplements: $suplements\n";
    $headers = "From: no-reply@massatges.fonoll.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Un correu electrònic de confirmació ha estat enviat a $email.";
    } else {
        echo "Hi ha hagut un problema en enviar el correu electrònic de confirmació.";
    }
}
?>
