@extends('main')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        @component('_c.search_xs')@endcomponent
      </div>
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"></h3>
          </div>
          <div class="panel-body">
            <div class="pull-right">
              <small>Hasil Pencarian</small>
            </div>
          </div>
          <div class="panel-footer">

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
