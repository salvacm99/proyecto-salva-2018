<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\classes\Sesion;
 ?>

<?php
  $sesion = new Sesion();
  $tipoSesion="";
  //variable que tendra la localización url o estara en blanco
  $crearOferta="";

  session_start();
  if (isset($_SESSION['login_user']))
    {
      $tipoSesion= $sesion->IsSesion();
      $crearOferta="html/crearOferta.php";

    }
    else
    {
      $tipoSesion="Inicio Sesion";
      $crearOferta="";

    }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" />

    <title>TruequeFacil</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="shortcut icon" href="Imagenes/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="Imagenes/Logo.png " width="40" height="40"> &emsp;
        <a class="navbar-brand" href="index.php"> TruequeFacil</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">


              <a class="nav-link" href="html/inicio.html"><?php echo $tipoSesion;?></a>
              <a class="nav-link"  onclick="myFunction()">Cerrar Sesion</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="html/registerTrabajador.html">Registrar Trabajador</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="html/quienesSomos.php">Quienes somos?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="html/contact.html">Contacto</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('Imagenes/ImagenesIndex/fondoWebIni.jpg')">

          </div>
        </div>

      </div>
    </header>

    <!-- Page Content -->
    <div class="container">
    <h1 class="my-4">Opciones</h1>
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Ofertas</h4>
          <div class="card-body">
            <center><p class="card-text">Crear Oferta</p></center>
          </div>
          <center><img src="Imagenes/ImagenesIndex/inscribir.png" alt="Imagen contactar" width="300" height="150"></center>
          <div class="card-footer">

            <a href="<?php echo $crearOferta;?>" class="btn btn-primary">Crear</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Ofertas</h4>
          <div class="card-body">
            <center><p class="card-text">Buscar Ofertas</p></center>
          </div>
          <center><img src="Imagenes/ImagenesIndex/buscar.png" alt="Imagen contactar" width="200" height="150"></center>
          <div class="card-footer">
            <a href="html/listado_ofertas.php" class="btn btn-primary">Buscar</a>
          </div>
        </div>
      </div>
      <!-- Marketing Icons Section -->
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Atención al Cliente</h4>
            <div class="card-body">
              <center><p class="card-text">Te ayudamos en tus preguntas</p></center>
            </div>
            <center><img src="Imagenes/ImagenesIndex/duda.png" alt="Imagen contactar" width="200" height="150"></center>
            <div class="card-footer">
              <a href="html/contact.html" class="btn btn-primary">Ayuda</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; FLORIDA UNIVERSITARIA</p>
      </div>
      <!-- /.container -->

      <li class="nav-item">
        <a class="nav-link" href="html/formAD.php">Panel de Administracion</a>
      </li>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



<script>
function myFunction()
{
  //xmlhttp.open("POST", "/src/models/recibir/logout.php?varible="true,true);
  $.ajax({
                data:  {pulsado:true},
                url:   '../src/models/recibir/logout.php',
                type:  'post',

                success:  function (response)
                 {
                  location.reload();

                }
        });
}
</script>
  </body>

</html>
