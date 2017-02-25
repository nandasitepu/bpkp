@extends('main')

@section('stylesheets')

@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        @include('charts.pfa')
      </div>
      <div class="col-md-6">
        @include('charts.spip')
      </div>
      <div class="col-md-6">
        @include('charts.apip')
      </div>

    </div>


  </div>

@endsection
