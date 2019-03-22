<?php
require_once("config.php");

$db = new Database();

$courses = $db->select("SELECT * FROM TCURSO");

echo "<pre>";
  var_dump($courses);
echo "</pre>";

?>
