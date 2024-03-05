<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['first-name'];
    $apellido = $_POST['second-name'];
    $email = $_POST['email'];
    $mensaje = $_POST['textarea'];
    
    $destinatario = "valeria.sanchez.ord@gmail.com";
    
    $asunto = "Nuevo mensaje de contacto desde tu sitio web";
    
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Apellido: $apellido\n";
    $contenido .= "Email: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";
    
    mail($destinatario, $asunto, $contenido);
    
    echo "<p>Tu mensaje ha sido enviado correctamente. ¡Gracias por ponerte en contacto!</p>";
}
?>