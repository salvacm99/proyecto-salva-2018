<?php
namespace Daw\models\classes;
use Daw\config\Config;
use Mysqli;
//require_once "../config/config.php";
/**
 * clase Db base de datos
 */
class Db
{
  private $server;
  private $user;
  private $pass;
  private $db;
  //Propiedad conector
 private $conector;
 private $config;

  function __construct()
  {
//    $config=new Config("34.217.32.255","root","root1234","proyecto_integrado(freelancers)");
    $config=new Config("localhost","root","","proyecto_integrado(freelancers)");

    $this->server=$config->getHost();
    $this->user=$config->getUser();
    $this->pass=$config->getPass();
    $this->db=$config->getDb();
  }
  function conectar()
  {
    $conectorTmp = new Mysqli ($this->server,$this->user,
                                  $this->pass,$this->db) ;
    if ($conectorTmp->connect_errno)
    {
      $this->conector=false;
    }
    else
    {
      $this->conector=$conectorTmp;
    }
  }
    /**
     * Get the value of clase Db base de datos
     *
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the value of clase Db base de datos
     *
     * @param mixed host
     *
     * @return self
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Get the value of User
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of User
     *
     * @param mixed user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get the value of Pass
     *
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of Pass
     *
     * @param mixed pass
     *
     * @return self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }

    /**
     * Get the value of Db
     *
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of Db
     *
     * @param mixed db
     *
     * @return self
     */
    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }

    /**
     * Get the value of Conector
     *
     * @return mixed
     */
    public function getConector()
    {
        return $this->conector;
    }

    /**
     * Set the value of Conector
     *
     * @param mixed conector
     *
     * @return self
     */
    public function setConector($conector)
    {
        $this->conector = $conector;
        return $this;
    }

    /**
     * Get the value of Config
     *
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Set the value of Config
     *
     * @param mixed config
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->config = $config;
        return $this;
    }

}



 ?>
