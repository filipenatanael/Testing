@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <Panel title="Dashboard">
               Testing Vue JS...

               <div class="row">
                 <div class="col-md-4">
                   <Panel title="Dashboard">Testing Vue JS... 1</Panel>
                 </div>

                 <div class="col-md-4">
                   <Panel title="Dashboard">Testing Vue JS... 2</Panel>
                 </div>

                 <div class="col-md-4">
                   <Panel title="Dashboard">Testing Vue JS... 3</Panel>
                 </div>
               </div>

               <Panel title="Dashboard">Testing Vue JS...</Panel>

               <Panel title="Dashboard">
                Testing Vue JS...
               </Panel>

              </Panel>
          </div>
      </div>
  </div>
@endsection
