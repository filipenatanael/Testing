<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('application_name')</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Painel de Controle</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="{{  route('admin.courses') }}">Top 100 Certificados</a></li>
          <li><a href="{{  route('admin.courses.certificates') }}">Top 100 Cursos</a></li>
          <li><a href="{{  route('admin.courses.students') }}">Lista de alunos</a></li>
        </ul>
      </div>
    </nav>

    <div class="well">Bem Vindo!</div>

    @yield('content')

  </div>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
