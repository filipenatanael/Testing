<?php
define("DS", DIRECTORY_SEPARATOR);

require __DIR__ . DS . 'vendor' . DS . 'autoload.php';

use MyProject\Hello\Printer;

$print = new Printer();
