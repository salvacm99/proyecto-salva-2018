<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use Daw\models\classes\Sesion;
 ?>
<?php
    // get the q parameter from URL
$post = $_POST["pulsado"];
$sesion = new Sesion();

if(post==true)
{
    session_start();

        $sesion->destroy();
}

?>