<?php
namespace Daw\models\classes;
use Daw\models\classes\Table;
/**
 *
 */
class Servicio extends Table
{
  function __construct()
  {
    parent::__construct();
  }
  public function findServicios()
  {
    return parent::find("SELECT * FROM servicio ");
  }


  public function insertServicio($Nombre, $Horas, $Precio, $Descripcion, $tipo_servicio)
  {
    $sql ="INSERT INTO servicio (Nombre, Horas,Precio, Descripcion,tipo_servicio)
    VALUES ('$Nombre','$Horas','$Precio','$Descripcion','$tipo_servicio')";
     return parent::insert($sql);
  }

  public function selectMax(){
    $sql = "SELECT max(Id_servicio) as ultimo from servicio";
    return parent::find($sql);
  }
  public function insertEnteServicio($NIF,$Id_servicio){
    $sql ="INSERT INTO ente_servicio (Id_ente_servicio,Fecha_inicio,Fecha_final,NIF,Id_servicio)
    VALUES ('',' ',' ','$NIF','$Id_servicio')";
    return parent::insert($sql);
  }

  public function mostrarOfertas(){
    $sql = "SELECT * FROM ente LEFT JOIN ente_servicio INNER JOIN servicio ON ente_servicio.Id_servicio = servicio.Id_servicio ON ente_servicio.NIF = ente.NIF";
    return parent::find($sql);
  }

/*
  public function updateUsuario($_usuario,$_nombre,$_apellidos, $_user_name, $_contrasenya,$_edad, $_curso, $_puntuacion, $_correo)
  {
    $sql ="UPDATE  Usuarios
        SET nombre='$_nombre',apellidos='$_apellidos',usuario='$_user_name',contrasenya='$_contrasenya',edad='$_edad',curso='$_curso',
          puntuacion='$_puntuacion',correo='$_correo'
        WHERE nombre='$_usuario'";
     return parent::update($sql);
  }
*/
  public function deleteUsuario($_id_servicio)
  {
      $sql = "DELETE FROM servicio WHERE Id_servicio='$_id_servicio'";
       return parent::delete($sql);
  }

}
 ?>
