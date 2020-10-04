<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form3.css">
    <title>formulario de contacto - mensaje enviado</title>
</head>
<body>
<?php
        $myemail = 'yepesmolina23@gmail.com';
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $message = $_POST['mensaje'];

        $to = $myemail;
        $email_subject = "Nuevo mensaje: $subject";
        $email_body ="has recibido un nuevo mensaje. \n Nombre: $name \n Correo:
        $email \n Mensaje \n $message";
        $headers = "from: $email";

        mail($to, $email_subject, $email_body, $headers);
        echo "El mensaje se ha enviado correctamente";
        ?>
    <center>
        
        <form method="post" action="enviar.php">
            <input type="text" name="nombre" placeholder="NOMBRE">
            <input type="text" name="nombre" placeholder="CORREO">
            <textarea type="text" name="nombre" placeholder="MENSAJE">
            </textarea>
            <br>
            <input type="submit" value="ENVIAR">
        </form>
    </center>
    
</body>
</html>