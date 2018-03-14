@extends('layouts.app')

@section('content')
  <body-site size="12">
    <Panel title="List of articles">

      <list-table
      v-bind:titles="['#','Title','Description','Autor','Date','Actions']"
      v-bind:itens="
      [
      ['10','PHP OO','Course of computer programmer','John .W','25/06/2012'],
      ['15','Vue JS','Course of Vue JS','John .S','27/06/2012']
      ]"
      ></list-table>

    </Panel>
  </body-site>
@endsection
