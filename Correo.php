<?php

//este es el correo al que se enviara el mensaje
$destinatario='kemish26@gmail.com'

$nombre= $_POST['nombre'];
$asunto= $_POST['asunto'];
$email= $_POST['email'];
$mensaje= $_POST['mensaje'];

$header="Enviado desde Vida Plena Live ";

$mensajeCompleto=$mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);

echo"<script>alert('Correo enviado exitosamente')</sript>";
?>
echo"<script> setTimeout (\"location.href='index.html'\",1000)</sript>";