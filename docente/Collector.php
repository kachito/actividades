<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-107-21-218-93.compute-1.amazonaws.com");
define("DB_USER", "cxlojcbxwoizpq");
define("DB_PASS", "2iAn7vdLizHnNgFFEkwkBrfaUK");
define("DB_NAME", "dg88824i8cg10");

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