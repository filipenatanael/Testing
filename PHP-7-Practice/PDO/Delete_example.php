<?php

$conn = new PDO("mysql:dbname=phonebook; host=localhost","root", "");


$query = "DELETE FROM
          CONTACTS
          WHERE
          ID = :ID";

$stmt = $conn->prepare($query);

$contact_id = 3;

$stmt->bindParam(":ID", $contact_id);

$stmt->execute();

?>
