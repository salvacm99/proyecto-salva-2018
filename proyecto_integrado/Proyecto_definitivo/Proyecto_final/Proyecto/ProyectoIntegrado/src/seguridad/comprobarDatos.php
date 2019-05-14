<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Ente;
 ?>
<?php

$ente = new Ente();

      function ComprobarDatos()
      {

        $ente = new Ente();

        $recibido =$_POST["busqueda"];

        $busqueda = explode("-", $recibido);
        $resultado= $ente->findBaseDatos($busqueda[0],$busqueda[1]);
        $contar = mysqli_num_rows($resultado);
        $json_string = json_encode($contar);
        echo $json_string;

      }

      ComprobarDatos();



?>
