@extends('layouts.app')

@section('content')
  <the-body-site size="12">
    <Panel title="Dashboard">
      <div class="row">
        <div class="col-md-4">
          <Boxe
          amount="100"
          title="Shoes"
          url="#"
          color="orange"
          icon="ion ion-stats-bars"
          />
        </div>

        <div class="col-md-4">
          <Boxe
          amount="200"
          title="Shoes"
          url="#"
          color="green"
          icon="ion ion-stats-bars"
          />
        </div>

        <div class="col-md-4">
          <Boxe
          amount="300"
          title="Shoes"
          url="#"
          color="blue"
          icon="ion ion-stats-bars"
          />
        </div>
      </div>
      <Panel title="Dashboard">Testing Vue JS...</Panel>
    </Panel>
  </the-body-site>
@endsection
