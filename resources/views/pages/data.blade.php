@extends('main')

@section('stylesheets')

@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- PFA -->
        @include('charts.pfa')
      </div>
      <div class="col-md-6">
        <!-- SPIP -->
        @include('charts.spip')
      </div>
      <div class="col-md-6">
        <!-- APIP -->
        @include('charts.apip')
      </div>
    </div>
    <br>
  </div>
@endsection
