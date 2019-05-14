<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

<?php

require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Servicio;
use Daw\models\classes\Tipo;
use Daw\models\classes\Ente;

$servicio= new Ente();


 ?>
    <meta charset="utf-8">
    <title>TruequeFacil</title>
    <link href="../css/form.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../Imagenes/favicon.ico">
  </head>
  <body>

    <div class="form-style-10">
  <h1>Eliminar Usuario</h1>

  <form class="" action="" method="post">
      <div class="inner-wrap">
        <select name="borrar_usuario">
          <?php
            $trabajos=$servicio->findForNIF();
            foreach ($trabajos as $fila) {
              echo "<option value=".$fila['nif'].">".$fila['nif']."</option>";
            }
          ?>
        </select>
       <br><br><br>
          <input type="submit" value="Eliminar" onclick="return deleteUsuario();">
          <input type="reset" id="limpiar" value="Limpiar">
          <input type="button" value="Volver" onclick="window.location.href='formAD.php'">
      </div>



      <!--<div class="button-section">
       <span class="privacy-policy">
       <input type="checkbox" required name="field7">Aceptar términos y condiciones de uso.
       </span>
     </div>-->
  </form>
  </div>

  </body>
</html>
