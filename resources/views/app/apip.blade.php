@extends('main')

@section('stylesheets')
<style media="screen">
canvas {
    padding: 0;
    margin: auto;
    display: block;
}
</style>
@endsection

@section('content')
  <div class="row">
    <div class="col-xs-12 col-md-10 col-md-offset-1">
      <div class="panel panel-default text-center">

        <div class="panel-body text-center" >
            @include('charts.apip')
        </div>
      </div>
    </div>
  </div>
@endsection
