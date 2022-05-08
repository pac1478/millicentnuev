<?php
    $destino= "pcabrera.aol@gmail.com";
    $nombre = $_POST["nombre"]
    $telefono = $_POST["telefono"]
    $email = $_POST["email"]
    $mensaje = $_POST["mensaje"]
    $content = "Nombre: " . $nombre . "\nTeléfono: " . $telefono . "\nEmail: " . $email . "\nMensaje: " . $mensaje;

    mail($destino, "Contacto", $content);

    header("location: ../pages/gracias.html")

?>
