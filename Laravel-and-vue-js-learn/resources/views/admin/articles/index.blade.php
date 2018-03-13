@extends('layouts.app')

@section('content')
  <body-site size="12">
    <Panel title="List of articles">

      <list-table v-bind:titles="['#','Title','Description','Autor','Date','Action']"></list-table>

    </Panel>
  </body-site>
@endsection
