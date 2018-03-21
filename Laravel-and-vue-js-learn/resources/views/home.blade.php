@extends('layouts.app')

@section('content')
  <body-site size="12">
    <Panel title="Dashboard">
      <div class="row">
        <div class="col-md-4">
          <Boxe
          amount="100"
          title="Articles"
          url="{{ route('articles.index') }}"
          color="#6C8CD0"
          icon="ion-arrow-graph-up-right"
          />
        </div>

        <div class="col-md-4">
          <Boxe
          amount="200"
          title="Books"
          url="#"
          color="#2CCCAB"
          icon="ion-social-dropbox-outline"
          />
        </div>

        <div class="col-md-4">
          <Boxe
          amount="300"
          title="Shoes"
          url="#"
          color="#FDA285"
          icon="ion-thermometer"
          />
        </div>
      </div>
      <Panel title="Dashboard">Testing Vue JS...</Panel>
    </Panel>
  </body-site>
@endsection
