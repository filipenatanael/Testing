<?php

$tns = "(DESCRIPTION =
          (ADDRESS = (PROTOCOL = TCP)(HOST = PC-GAMER-TEST)(PORT = 1521))
          (CONNECT_DATA =
              (SERVER = DEDICATED)
              (SERVICE_NAME = XE)
        ))";

$username = "username";
$password = "password";


try {
    $db = new PDO('oci:dbname='.$tns, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Could not connect to the database: ".$e;
    exit;
}

try {
    $results=$db->query("SELECT * FROM TCURSO");
    echo "Connected Successful.";
} catch (Exception $e) {
    echo "Error: ".$e;
    exit;
}


echo "<pre>";
var_dump($results->fetchAll());
echo "</pre>";

?>
