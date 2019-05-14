<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use Daw\models\classes\Ente;
 ?>

<?php
//Variables recibidas del formulario
$nif=$_POST['NIF'];
$nombre=$_POST['Nombre'];
$apellidos=$_POST['Apellidos'];
$telef=$_POST['Telefono'];
$email=$_POST['Email'];
$direccion=$_POST['Direccion'];
$contrasenya=$_POST['Contrasenya'];
//Objeto Ente
$ente = new Ente();
$contrasenya= hash("ripemd160",$contrasenya);
$ente->insertUsuario($nif,$nombre,$apellidos,$telef,$email,$direccion,$contrasenya);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      .btn
      {
          border: 2;
          color: white;
          padding: 12px 28px;
          font-size: 16px;
          cursor: pointer;
      }
      .success {background-color: #4CAF50;}

      /* Green */
      .success:hover {background-color: #46a049;}

      .danger {background-color: #f44336;} /* Red */
      .danger:hover {background: #da190b;}

      p { font-size: xx-large }

</style>
  </head>
  <body>

  <div class="w3-panel w3-green">
    <p align="center">Registrado con éxito</p>
    <div align="center">
      <a href="../../../public/index.php">
        <button class="btn success" >Continuar</button>
      </a>
	 </div>
  </div>


  </body>
</html>
