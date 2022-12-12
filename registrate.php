<?php
    require 'conexion.php';
    
    echo $message = '';

    if (isset($_POST['registro'])) {
        //encriptamos la contraseña antesde ser insertada en la BD
        $contrasenia = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 11]);

        $sql = "INSERT INTO users (usuario,email, password) VALUES (:usuario,:email, :password)";
        $smtmt = $conn->prepare($sql);
        
        $smtmt->bindParam(':usuario',$_POST['usuario'],PDO::PARAM_STR);
        $smtmt->bindParam(':email',$_POST['email'],PDO::PARAM_STR);
        $smtmt->bindParam(':password',$contrasenia);
        if($smtmt->execute()){
            $message = 'Guardado con Éxito';
        }else{
            $message = '! Ups no se guardó datos ¡';
        }
    

    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrate</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>

<?php
require_once ('partials/header.php');
?>

    <form action="" method="POST">
        <div class="register">
            <h2>registrate</h2>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Ingrese Usurio" required>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Ingrese correo electrónico" required>
            <label for="clave">Contraseña</label>
            <input type="text" name="password" id="password" placeholder="Ingrese contraseña" required>
            <input type="submit" name="registro" placeholder="Sign In" >
            <?php 
            if (isset($_POST['registro'])) {
                echo "<script>
                alert('$message');
                </script>";

                // "<p>$message</p>";
            }
                
            ?>
            
        </div>

    </form>
    
</body>
</html>