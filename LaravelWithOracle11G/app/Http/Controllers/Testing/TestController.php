<?php

namespace App\Http\Controllers\Testing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use DB;

class TestController extends Controller
{
    public function index()
    {
       $alunos= \DB::select('SELECT * FROM TALUNO');
       echo '<Pre>';
       var_dump($alunos);
       echo '</Pre>';
       
      //echo $alunos[1]->nome;
      $resultArray = json_decode(json_encode($alunos), true);

      echo $resultArray[1]['cod_aluno'];
      echo "<br>";
      echo $resultArray[0]['nome'];
      echo "<br>";
      echo $resultArray[0]['cidade'];
      echo "<br>";
      echo $resultArray[0]['cep'];

    }
}
