<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Cuenta</title>
</head>
<body>
    <h1>Verificación de Cuenta</h1>
    <p>Hola,</p>
    <p>Gracias por registrarte en nuestro sitio. Para completar tu registro, por favor haz clic en el siguiente enlace para verificar tu cuenta:</p>
    <p><a href="<?php echo base_url() ?>/verificar_cuenta?codigo=<?php echo generar_codigo(10); ?>">Verificar Cuenta</a></p>
    <p>Si no has solicitado este registro, ignora este correo.</p>
    <p>Atentamente,</p>
    <p>Tu equipo de soporte</p>
</body>
</html>
