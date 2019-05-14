<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Tipo;

$servicio= new Tipo();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil-Usuario</title>
    <link href="../css/form.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../Imagenes/favicon.ico">
    <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div class="form-style-10">
  <h1>Perfíl</h1>

  <form class="" action="../../src/models/recibir/crear_oferta.php" method="post">
      <div class="inner-wrap">
        <div class="container">
          <label>Nombre <input type="text" placeholder="Nombre de la oferta" name="Nombre" required /></label>
          <label>Horas <input type="number" placeholder="Horas de trabajo diario" maxlength="20" name="Horas" required /></label>
          <label>Precio <input type="number" maxlength="30" placeholder="Precio por hora" name="Precio" required /></label>
          <label>Tipo de oferta</label>
          <select name="tipo_servicio">
            <?php
              $trabajos=$servicio->findBaseDatos();
              foreach ($trabajos as $fila) {
                echo "<option value=".$fila['Id_tipo'].">" .$fila["Nombre"]."</option>";
              }
            ?>
          </select>
          <br><br>
          <label>Descripcion <textarea name="Descripcion" maxlength="200" placeholder="Pequeña descripción sobre la oferta" rows="8" cols="80"></textarea></label>

          <input type="submit" value="Enviar">
          <input type="reset" id="limpiar" value="Limpiar">
          <input style="float:right" type="button" value="Volver" onclick="window.location.href='../index.html'">
        </div>
      </div>

      <div class="button-section">
       <span class="privacy-policy">
       </span>
      </div>
  </form>
  </div>

  </body>
</html>
