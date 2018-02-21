<?php
/* PDO("DSN- DATA SOURCE NAME"); */

$conn = new PDO("mysql:dbname=phonebook; host=localhost","root", "");

$stmt = $conn->prepare("SELECT * FROM CONTACTS");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

/*
var_dump($results);
echo json_encode($results);
print_r($results);
*/

foreach ($results as $row) {
  foreach ($row as $key => $value) {
    print($key.': '.$value."\n");
  }
  print("-----------------------\n");
}

?>
