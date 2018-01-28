<?php
/* Working with simple array */
$fruits = array("Apple","Orange", "Pineapple");
$heroes = array();

array_push(
  $heroes,
  array(
    'realname' => 'Steve Rogers',
    'codename' => 'Captain America'
  ));
  print_r($heroes[0]['realname']);



  ?>
