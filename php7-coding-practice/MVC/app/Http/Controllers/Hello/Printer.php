<?php
namespace App\Http\Controllers\Hello;

use App\Http\Controllers\Controller;

class Printer extends Controller
{
  public function __construct()
  {
    print 'Hello World!';
  }
}
