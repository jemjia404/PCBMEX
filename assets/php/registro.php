<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
echo"".$nombre."".$email."";
var_dump(($nombre));
    // Aquí puedes realizar acciones adicionales, como enviar un correo o guardar en una base de datos

    // Redirige al usuario a una página de confirmación
    header("Location: success.html");
    exit;
}

