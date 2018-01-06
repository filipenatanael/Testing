@extends('layouts.templates')

@section('application_name','Painel de Controle')

@section('content')

<h2>Relatório </h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Aluno</th>
      <th>Qnt. Cerstificados</th>
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
