<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use Daw\models\classes\Sesion;
 ?>
<?php
$nif=$_POST['nif'];
$contrasenya=$_POST['contrasenya'];
//Objeto Sesion
$sesion = new Sesion();
$pass=$sesion->returnPass($nif);
$obj = mysqli_fetch_object($pass);
$contrasenya= hash("ripemd160",$contrasenya);
$resultado= $sesion->loginSearch($nif,$contrasenya);
$contar = mysqli_num_rows($resultado);
if($contar >= 1)
{
    $sesion->login($nif);
    echo "<script type='text/javascript'>alert('Logueado con Éxito');
    window.location='../../../public/index.php';
    </script>";
}
else
{
   echo "<script type='text/javascript'>alert('Error de Usuario o Contraseña');
   window.location='../../../public/index.php';
   </script>";
}
?>
