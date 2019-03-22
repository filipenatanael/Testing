<?php

$conn = new PDO("mysql:dbname=phonebook; host=localhost","root", "");


$query = "UPDATE
          CONTACTS
          SET
          NAME = :NAME, EMAIL = :EMAIL, PHONE_NUMBER = :PHONE_NUMBER
          WHERE
          ID = :ID";

$stmt = $conn->prepare($query);

$input_id = 3;
$input_name = "Frank";
$input_password = "frank@example.com";
$input_phone_number = "000000020";

$stmt->bindParam(":NAME", $input_name);
$stmt->bindParam(":EMAIL", $input_password);
$stmt->bindParam(":PHONE_NUMBER", $input_phone_number);
$stmt->bindParam(":ID", $input_id);

$stmt->execute();

?>
