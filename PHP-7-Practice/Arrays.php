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
  /*
  print_r($heroes[0]['realname']);
  Working with simple JSON
  echo json_encode($heroes);
  */

  $json = '[{
    "realname":"Steve Rogers",
    "codename":"Captain America"
  }]';
  $data = json_decode($json);

  /*
  In order to comply with E_STRICT standards prior to PHP 5.4,
  or the normal E_WARNING error level in PHP >= 5.4,
  assuming you are trying to create a generic object and assign the property ( realname and codename),
  you need to declare ( $obj ) as an object of stdClass in the global namespace:
  */
  $obj = new \stdClass();
  $obj->realname = "Wade Wilson";
  $obj->codename = 'DeadPool';

  $myJson = json_encode($obj);
  echo $myJson;

  ?>
