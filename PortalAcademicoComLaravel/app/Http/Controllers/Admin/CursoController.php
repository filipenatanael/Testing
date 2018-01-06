<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Aluno;

class CursoController extends Controller
{
  public function index(){
    $registries = Aluno::SelectTop100_Certified();
    return view('ControlPanel.cursos.index',compact('registries'));
  }

}
