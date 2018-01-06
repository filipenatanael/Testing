@extends('layouts.templates')

@section('application_name','Painel de Controle')

@section('content')

<h2>Lista de alunos </h2>
<p>Crie uma tela para listar os alunos com todos os campos do aluno na listagem e a opção para filtrar por nome. Considere realizar paginação da lista de alunos.</p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Aluno</th>
      <th>Qnt. de Certificados</th>
    </tr>
  </thead>
  <tbody>
    @foreach($registries as $registry)
    <tr>
      <td>{{ $registry->nome }}</td>
      <td>{{ $registry->quantidade }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
