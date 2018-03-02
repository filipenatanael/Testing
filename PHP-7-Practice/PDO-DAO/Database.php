<?php
/**
* Database Class
*/

class Database extends PDO {

  private $conn;

  public function __construct(){
    $this->conn = new PDO('oci:dbname=(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST = PC-GAMER-TEST)(PORT = 1521))(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = XE)))','system','R@@t');
  }

  private function setParams($statment, $parameters = array()) {
    foreach($parameters as $key => $value) {
      $this->setParam($statment, $key, $value);
    }
  }

  private function setParam($statment, $key, $value) {
    $statment->bindParams($key, $value);
  }

  public function query($rawQuery, $params = array()) {
    $stmt = $this->conn->prepare($rawQuery);
    $this->setParams($stmt, $params);
    $stmt->execute();
    return $stmt;
  }

  public function select($rawQuery, $params = array()):array {
    $stmt = $this->query($rawQuery, $params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>
