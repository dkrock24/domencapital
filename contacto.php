<?php

include('phpconection.php');

$to = "info@domencapital.com";

$nombre = $_POST['name'];
$email = $_POST['email'];
$movil = $_POST['movil'];
$comentario = $_POST['comentario'];
$fecha = date("d-M-Y");

$subject = "Contacto";
$txt = "Nombre : " . $nombre .  "\r\n";
$txt .= "Movil : " . $movil . "\r\n";
$txt .= "E-mail : " . $email . "\r\n";
$txt .= "Comentario : " . $comentario . "\r\n";
$txt .= "Fecha : " . $fecha . "\r\n";
$headers = "From: $email" . "\r\n";

//mail($to, $subject, $txt, $headers);

$conn = Connection::getConection();

if ( $conn ) {
    $now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO information (nombre, email, telefono, descripcion, procesado, created_at, updated_at)
        VALUES ('".$nombre."', '".$email."', '".$movil."', '".$comentario."', 0 , '".$now."', '".$now."')";

    $demo = $conn->query($sql);

    $conn->close();
}


header('Location: index.php?d=contacto');