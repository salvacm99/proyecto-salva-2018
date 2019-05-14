<?php
namespace Daw\models\classes;
use Daw\models\classes\Table;
/**
 *
 */
class Sesion extends Table
{
  private $nif;

  function __construct()
  {
    parent::__construct();
    $this->nif="";

  }
  public function login($_nif)
  {
    session_start();

    $_SESSION['login_user'] = $_nif;  // Initializing Session with value of PHP Variable
    $this->nif= $_nif;
      //$this->nif=$_nif;
      $this->loginNIF($_nif);

  }

  //busqueda del nif para el logeo
  public function loginNIF($_nif)
  {
    return parent::find("SELECT * FROM ente WHERE NIF='$_nif'");
  }

  //nos devuelve la contraseña encriptada
  public function returnPass($_nif)
  {
    return parent::find("SELECT Contrasenya FROM ente WHERE NIF='$_nif'");
  }

//busqueda del nif para el logeo
  public function loginSearch($_nif,$_pass)
  {
    return parent::find("SELECT * FROM ente WHERE NIF='$_nif' and Contrasenya = '$_pass'");
  }

  public function IsSesion()
  {
    if(isset($_SESSION))
    {
      return $_SESSION['login_user'];
    }
    else
    {
      return false;
    }

  }

  public function destroy()
    {
      session_start();
      // remove all session variables
      session_unset();

      // destroy the session
      session_destroy();

    }


    /*
    public function sesionNifReturn()
    {
        return $_SESSION['$_nif'];
    }
    */

}
 ?>
