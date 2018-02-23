<?php

$conn = new PDO("mysql:dbname=phonebook; host=localhost","root", "");

$conn->beginTransaction();
/* ---------------------------------------------------------------- */

$stmt = $conn->prepare("DELETE FROM CONTACTS WHERE ID = ?");

$contact_id = 3;

$stmt->execute(array($contact_id));

/* ---------------------------------------------------------------- */

/* $conn->rollback(); */

$conn->commit();

?>
