<?php

$conn = new PDO("mysql:dbname=phonebook; host=localhost","root", "");

$conn->beginTransaction();
/* ------------------------------------------------ */
$query = "DELETE FROM
          CONTACTS
          WHERE
          ID = :ID";

$stmt = $conn->prepare($query);

$contact_id = 3;

$stmt->bindParam(":ID", $contact_id);

$stmt->execute();

/* ------------------------------------------------ */

/* $conn->rollback(); */

$conn->commit();

?>
