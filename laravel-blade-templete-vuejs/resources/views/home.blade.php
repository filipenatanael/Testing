@extends('layouts.app')

@section('content')
  <container size="12">
    <panel-content title="Dashboard">
      <bread-crumb v-bind:list="{{$breadCrumb}}"></bread-crumb>
      <div class="row">
        <div class="col-md-4">
          <box-dashboard
          amount="100"
          title="Articles"
          url="{{ route('articles.index') }}"
          color="#6C8CD0"
          icon="ion-arrow-graph-up-right"
          />
        </div>

        <div class="col-md-4">
          <box-dashboard
          amount="200"
          title="Books"
          url="#"
          color="#2CCCAB"
          icon="ion-social-dropbox-outline"
          />
        </div>

        <div class="col-md-4">
          <box-dashboard
          amount="300"
          title="Shoes"
          url="#"
          color="#FDA285"
          icon="ion-thermometer"
          />
        </div>
      </div>
      <panel-content title="Dashboard">Testing Vue JS...</panel-content>
    </panel-content>
  </container>
@endsection
