<?php

$DSN = "127.0.0.1/XE"
$username = "Your Username";
$password = "Your Password";

$connection = oci_connect($username, $password, $DSN);

if(!$connection) {
  $message = oci_error();
  echo $message['message'], "n";
  exit;
} else {
  echo "Was connected!";
}

?>
