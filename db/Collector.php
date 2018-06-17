<?php

include_once('dataBase.php');
// Define configuration
define("DB_HOST", "ec2-107-22-174-187.compute-1.amazonaws.com");
define("DB_USER", "osqssxvutetuye");
define("DB_PASS", "5e7c7f6aa9e3d5648e0aa2cf701be17cd112ebe8df7bffed80a9c0ab22585c8b");
define("DB_NAME", "d7ldr81s6865d4");
class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);

  }
}
?>
