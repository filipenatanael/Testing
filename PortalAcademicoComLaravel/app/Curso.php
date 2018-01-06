<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  public static function SelectTopCourses($amount)
  {
    return \DB::table('aluno_certificados')
    ->select('cursos.id','cursos.nome', \DB::raw("COUNT('aluno_certificados.id') AS quantidade"))
    ->join('cursos', 'cursos.id', '=', 'aluno_certificados.curso_id')
    ->orderBy('quantidade', 'desc')
    ->groupBy('cursos.nome')
    ->having('quantidade', '>' , $amount)
    ->get();
  }
}
