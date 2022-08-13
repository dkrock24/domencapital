<?php

include('phpconection.php');

$to = "info@domencapital.com";

$email = $_POST['subscribir-email'];
$fecha = date("d-M-Y");

$subject = "Suscribirse";
$txt = "E-mail : " . $email . "\r\n";
$txt .="Fecha : " . $fecha. "\r\n";
$headers = "From: $email" . "\r\n";

//mail($to, $subject, $txt, $headers);

$conn = Connection::getConection();

if ( $conn ) {
    $now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO suscripcions ( email, created_at, updated_at)
        VALUES ('".$email."', '".$now."', '".$now."')";

    $demo = $conn->query($sql);

    $conn->close();
}

header('Location: index.php?s=suscribirse');

?>