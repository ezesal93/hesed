<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $run = $_POST["run"];
    $email = $_POST["email"];
    $convenio = $_POST["convenio"];
    $prevision = $_POST["prevision"];
    $especialidad = $_POST["especialidad"];
    $informacion_adicional = $_POST["informacion_adicional"];
    $contacto = $_POST["contacto"];
    
    $destinatario = "dolca1693@gmail.com"; // Reemplaza esto con tu dirección de correo electrónico
    
    $asunto = "Nuevo formulario de contacto desde el sitio web";
    
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "R.U.N: $run\n";
    $mensaje .= "Correo Electrónico: $email\n";
    $mensaje .= "Convenio: $convenio\n";
    $mensaje .= "Previsión de Salud: $prevision\n";
    $mensaje .= "Especialidad: $especialidad\n";
    $mensaje .= "Información Adicional:\n$informacion_adicional\n";
    $mensaje .= "¿Cómo desea ser contactado?: $contacto\n";
    
    $cabeceras = "From: $email";
    
    // Envía el correo electrónico
    mail($destinatario, $asunto, $mensaje, $cabeceras);
    
    // Redirige de vuelta a la página de contacto
    header("https://github.com/ezesal93/hesed/blob/main/procesar_formulario.php"); // Reemplaza con la URL de tu página de contacto
    exit;
}
?>
