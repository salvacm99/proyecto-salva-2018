<?php
namespace Daw\models\classes;
use Daw\models\classes\Table;
/**
 *
 */
class Tipo extends Table
{
  function __construct()
  {
    parent::__construct();
  }

  public function findBaseDatos()
  {
    //$sql=("SELECT $busqueda FROM servicio WHERE '$busqueda'=$valor");
    return parent::find("SELECT * FROM tipo");
  }

}
 ?>
