<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Aluno;

class CursoController extends Controller
{
  public function index(){
    echo 'Index:';
  }

  public function listCertificates(){
    $amount = 100;
    $registries = Aluno::SelectTopCertified($amount);
    return view('ControlPanel.courses.index',compact('registries'));
  }


  public function listCourses(){
    $amount = 2;
    $registries = Curso::SelectTopCourses($amount);
    return view('ControlPanel.courses.courses',compact('registries'));
  }

  public function listStudents(){
    return view('ControlPanel.courses.students',compact('registries'));
  }



}
