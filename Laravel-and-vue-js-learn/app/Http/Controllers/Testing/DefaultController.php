<?php

namespace App\Http\Controllers\Testing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class to testing
 */
class DefaultController extends Controller
{

  public function index()
  {
    $alunos= \DB::select('SELECT * FROM TALUNO');
    echo '<Pre>';
    var_dump($alunos);
    echo '</Pre>';
  }

}
