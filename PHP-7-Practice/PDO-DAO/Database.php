<?php
/**
*
*/
class Database extends PDO {

  private $connect;

  public function __construct(){
    $this->connect = new PDO("mysql:host=localhost;dbname=myDatabase", "root", "password")
  }

  public function query($rowQuery, $params = array()) {
    $stmt = $this->connect->prepare($rowQuery);
    $this->setParams($stmt, $params);
    return $stmt->execute();
  }

  private function setParams($statment, $parameters = array()) {
    foreach ($parameters as $key => $value) {
      $this->setParams($key, $value);
      /* $statment->bindParam($key => $value); */
    }
  }

  private function setParam($statment, $key, $value) {
    $statment->bindParam($key, $value);
  }

}

?>
