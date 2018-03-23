@extends('layouts.app')

@section('content')
  <body-site size="12">
    <panel-content title="List of articles">
      <bread-crumb v-bind:list="{{$breadCrumb}}"></bread-crumb>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</button>

      <list-table
      v-bind:titles="['#','Title','Description','Autor','Date']"
      v-bind:itens="
      [
      ['10','PHP OO','Course of computer programmer','John .W','25/06/2012'],
      ['15','Vue JS','Course of Vue JS','John .S','27/06/2012']
      ]"
      order="asc"
      orderColumn="1"
      create="#create"
      detail="#detail"
      edit="#edit"
      _delete="#delete"
      token="10099649616"
      ></list-table>
    </Panel>
  </body-site>

  <modal-content id="myModal">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="exampleModalLabel">New message</h4>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="recipient-name" class="control-label">Recipient:</label>
          <input type="text" class="form-control" id="recipient-name">
        </div>
        <div class="form-group">
          <label for="message-text" class="control-label">Message:</label>
          <textarea class="form-control" id="message-text"></textarea>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Send message</button>
    </div>
  </modal-content>

@endsection
