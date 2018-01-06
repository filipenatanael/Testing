@extends('layouts.templates')

@section('application_name','Painel de Controle')

@section('content')

<h2>Relatório </h2>
<p>Crie um relatório que liste somente os cursos com mais de 100 certificados, com o nome do curso e a quantidade de certificados de cada curso.</p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Curso</th>
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
