@extends('layouts.app')

@section('content')
  <the-body-site size="12">
    <Panel title="List of articles">
      <a href="">Create</a>

      <table class="table table-striped table-hover">
         <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Description</th>
              <th>Autor</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <tr>
              <th>1</th>
              <th>Testing Laravel</th>
              <th>Testing by using laravel framework</th>
              <th>John W.</th>
              <th>05/23/2010</th>
              <th>
                <a href="">Edit</a> |
                <a href="">Delete</a>
              </th>
            </tr>
         </tbody>
      </table>


    </Panel>
  </the-body-site>
@endsection
