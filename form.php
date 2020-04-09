<?php
//Declaración de variables y obteniendo sus valores de los inputs en html
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$asunto = "¡Internet Gratis En La Zona Colonial!";
$correo = $_POST['correo'];
$clave = $_POST['clave'];

//Organizando el contenido que vamos a enviar al destinatario
$carta = "Hola " . $nombre . " " . $apellido . " este es un mensaje desde nuestra web de la Zona Colonial Digital, donde le ofrecemos Internet gratis" . "\nSu contraseña para el Internet es: " . "ZC" . $clave . "Digital" . "\nLa red está abierta pero necesita de esta contraseña para poder navegar libremente... ¡Que lo disfrute!";

//Enviando el mensaje a su destinatario
mail($correo, $asunto, $carta);
header('Location:bienvenida.html');
?>