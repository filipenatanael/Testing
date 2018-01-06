<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
  public function AlunoCertificado()
  {
    return $this->hasMany(AlunoCertificado::class, 'aluno_id');
  }

  public static function SelectTop100_Certified()
  {
    return \DB::table('aluno_certificados')
    ->select('alunos.id','alunos.nome', \DB::raw("COUNT('aluno_certificados.id') AS quantidade"))
    ->join('alunos', 'alunos.id', '=', 'aluno_certificados.aluno_id')
    ->orderBy('quantidade', 'desc')
    ->groupBy('alunos.id', 'alunos.nome')
    ->take(100)
    ->get();
  }

}
