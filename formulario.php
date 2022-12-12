<?php
  include("conexion.php");
  if(isset($_POST['enviar_compra'])){
      if (strlen($_POST['nombre']) >= 1 &&
      strlen($_POST['telefono']) >= 1 &&
      strlen($_POST['trabajo']) >= 1 &&
      strlen($_POST['codigo_postal']) >= 1 &&
      strlen($_POST['colonia']) >= 1 &&
      strlen($_POST['localidad']) >= 1 &&
      strlen($_POST['estado']) >= 1 &&
      strlen($_POST['municipio']) >= 1 &&
      strlen($_POST['calle']) >= 1 &&
      strlen($_POST['numero_exterior']) >= 1 &&
      strlen($_POST['numero_interior']) >= 1){

          $nombre = trim($_POST['nombre']);
          $telefono = trim($_POST['telefono']);
          $trabajo = trim($_POST['trabajo']);
          $codigo_postal = trim($_POST['codigo_postal']);
          $colonia = trim($_POST['colonia']);
          $localidad = trim($_POST['localidad']);
          $estado = trim($_POST['estado']);
          $municipio = trim($_POST['municipio']);
          $calle = trim($_POST['calle']);
          $numero_exterior = trim($_POST['numero_exterior']);
          $numero_interior = trim($_POST['numero_interior']);
        //   $consulta = "INSERT INTO registro_videojuegos(id_videojuegos, nombre, telefono, trabajo, codigo_postal, colonia, localidad, estado, municipio, calle, numero_exterior, numero_interior) VALUES ('$nombre','$telefono','$trabajo','$codigo_postal','$colonia','$localidad','$estado','$municipio','$calle','$numero_exterior','$numero_interior')";
        //   $resultado = mysqli_query($conn,$consulta);

        $sql = "INSERT INTO registro_videojuegos (nombre,telefono,trabajo,codigo_postal,colonia,localidad,estado,municipio,calle,numero_exterior,numero_interior) VALUES (:nombre,:telefono,:trabajo,:codigo_postal,:colonia,:localidad,:estado,:municipio,:calle,:numero_exterior,:numero_interior)";
        $smtmt = $conn->prepare($sql);

        $smtmt->bindParam(':nombre',$nombre,PDO::PARAM_STR);
        $smtmt->bindParam(':telefono',$telefono,PDO::PARAM_STR);
        $smtmt->bindParam(':trabajo',$trabajo,PDO::PARAM_STR);
        $smtmt->bindParam(':codigo_postal',$codigo_postal,PDO::PARAM_STR);
        $smtmt->bindParam(':colonia',$colonia,PDO::PARAM_STR);
        $smtmt->bindParam(':localidad',$localidad,PDO::PARAM_STR);
        $smtmt->bindParam(':estado',$estado,PDO::PARAM_STR);
        $smtmt->bindParam(':municipio',$municipio,PDO::PARAM_STR);
        $smtmt->bindParam(':calle',$calle,PDO::PARAM_STR);
        $smtmt->bindParam(':numero_exterior',$numero_exterior,PDO::PARAM_STR);
        $smtmt->bindParam(':numero_interior',$numero_interior,PDO::PARAM_STR);

        // if($smtmt->execute()){
        //     $message = 'Guardado con Éxito';
        // }else{
        //     $message = '! Ups no se guardó datos ¡';
        // }

              if ($smtmt->execute()){
              ?>
              <h3 class="ok">has hecho la compra correctamente</h3>
              <?php
          } else{
              ?>
              <h3 class="bad">uy ha ocurrido un error</h3>
              <?php
          }
          }else{
          ?>
          <h3 class="bad">por favor completa los campos</h3>
          <?php
      }
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilote3.css">
    <title>Document</title>
</head>
<body>
    <section>
    <div class="box">
        <div class="form">
            <h2>INTRODUCE LOS DATOS DE LA COMPRA </h2>
            <form method="POST">
                <div class="inputBx">
                    <input type="text" name="nombre" placeholder="nombre">
                </div>
                <br>
                <div class="inputBx">
                    <input type="text" name="telefono" placeholder="telefono">
                </div>
                <br>
                <h2>datos de direccion</h2>
                <div class="inputBx">
                    <input type="text" name="trabajo" placeholder="trabajo">
                </div>
                <br>
                <div class="inputBx">
                    <input type="text" name="codigo_postal" placeholder="codigo postal">
                </div>
                <br>
                <div class="inputBx">
                    <input type="text" name="colonia"  placeholder="colonia">
                </div>
                <br>
                <div class="inputBx">
                    <input type="text" name="localidad" placeholder="localidad">
                </div>
                <br>
                <div class="inputBx">
                    <input type="text" name="estado" placeholder="estado">
                </div>
                <br>
                <div class="inputBx">
                    <input type="text" name="municipio" placeholder="municipio">
                </div>
                <br>
                <div class="inputBx">
                    <input type="text" name="calle" placeholder="calle">
                </div>
                <br>
                <div class="inputBx">
                    <input type="text" name="numero_exterior" placeholder="numero exterior">
                </div>
                <br>
                <div class="inputBx">
                    <input type="text" name="numero_interior" placeholder="numero interior">
                </div>
                <br>
                <h2>selecciona producto</h2>
                <br>
                <label class="xbox"><input
                type="checkbox">xbox</label>
                <label class="xbox"><input
                type="checkbox">ps4</label>
                <label class="xbox"><input
                type="checkbox">pc</label>
                <br>
                <br>
                <h2>selecciona la tarjeta de credito o debito</h2>
                <br>
                <ul>
            <li>
                <label>
                    <input type="checkbox" name="">
                    <p>mastercard</p>
                    <span></span>
                    <br>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="">
                    <p>visa</p>
                    <span></span>
                    <br>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="">
                    <p>american express</p>
                    <span></span>
                    <br>
                </label>
            </li>
        </ul>
        <br>
        <img src="metodo.jpg" alt="" width="200">
        <br>
        <br>
                <div class="inputBx">
                    <input type="submit" name="enviar_compra" value="enviar compra">
                </div>
            </form>

        </div>

    </div>

    </section>


</body>
</html>
