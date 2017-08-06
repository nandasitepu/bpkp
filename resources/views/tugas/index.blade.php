@extends('main')
@section('title')
  Daftar Tugas 2017
@endsection

@section('stylesheets')

@endsection

@section('content')
  <div class="row">
    <div class="col-md-1 hidden-xs">
      Side Menu 
    </div>
    <div class="col-md-9">
      Content
    </div>
    <div class="col-md-2">

      <div id="gpr-kominfo-widget-container"></div>
    </div>
  </div>
  <br>
@endsection

@section('bot_scripts')
 <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
 <script src="{{asset('js/myvue.js')}}"></script>
@endsection
