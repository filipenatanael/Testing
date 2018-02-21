<?php

$conn = new PDO("mysql:dbname=phonebook; host=localhost","root", "");

$query = "INSERT INTO
          CONTACTS (NAME, EMAIL, PHONE_NUMBER)
          VALUES
          (:NAME, :EMAIL, :PHONE_NUMBER)";
          
$stmt = $conn->prepare($query);

$input_name = "John Cash";
$input_password = "john.cash@example.com";
$input_phone_number = "000000009";

$stmt->bindParam(":NAME", $input_name);
$stmt->bindParam(":EMAIL", $input_password);
$stmt->bindParam(":PHONE_NUMBER", $input_phone_number);

$stmt->execute();

?>
