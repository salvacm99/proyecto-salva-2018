<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Servicio;
use Daw\models\classes\Tipo;
use Daw\models\classes\Ente;

$servicio= new Servicio();
$ente= new Ente();
$tipo= new Tipo();

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TruequeFacil</title>
    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="../Imagenes/favicon.ico">
    <!-- Custom styles for this template -->
    <link href="../css/mostrar_usuarios.css" rel="stylesheet">
    <link href="../css/form.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
  </head>

  <body>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Ofertas</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Ofertas</li>
      </ol>
      <table id="tabla_ofertas">
        <tr>
          <?php
            $usuario=$ente->findAllUsuario();
            $trabajos=$servicio->findServicios();
            $ofertas=$servicio->mostrarOfertas();
            $contador=1;
            foreach ($ofertas as $fila) {
              if($contador==1){
                ?>
                <div class="container">
                  <div class="row">
                <?php
              }
              ?>
                    <div class="col">
                      <div class="card h-100">
                        <h4 class="card-header">Tipo de oferta</h4>
                          <div class="card-body">
                            <b><p class="card-text">Nombre de la oferta</p></b>
                            <label><?=$fila["Nombre"]?></label>
                            <b><p class="card-text">Telefono del trabajador</p></b>
                            <label><?=$fila["Telefono"]?></label>
                            <b><p class="card-text">Correo del trabajador</p></b>
                            <label><?=$fila["Email"]?></label>
                            <b><p class="card-text">Horas de trabajo diario </p></b>
                            <label><?=$fila["Horas"]?></label>
                            <b><p class="card-text">Costo por hora</p></b>
                            <label><?=$fila["Precio"]?></label>
                            <b><p class="card-text">Descripción del trabajo</p></b>
                            <label><?=$fila["Descripcion"]?></label>
                          </div>
                          <div class="card-footer">
                            <a href="#" class="btn btn-primary">Contactar</a>
                          </div>
                      </div>
                    </div>
              <?php
              $contador++;
              if($contador==4)
              {
                ?>
                  </div>
                </div>
                <br>
                <?php
                $contador=1;
              }
            }
            if($contador<4){
              for ($i=$contador; $i <4 ; $i++) {
                echo"<div class='col'></div>";
              }
              ?>
                </div>
              </div>
              <?php
            }
            ?>
        </tr>
      </table>



    <script type="text/javascript" src="../js/listado_ofertas.js"></script>

  </body>

</html>
