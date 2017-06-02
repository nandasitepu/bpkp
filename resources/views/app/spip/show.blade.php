@extends('main')
@section('title')

@endsection
@section('stylesheets')
  <style media="screen">
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    background-color: green;
  }
  .absolute {
   right: 20px;
   position: fixed;
   overflow: auto;
   z-index: 1;
  }
  </style>
@endsection

<div id="app">
  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">SPIP ID: {{$spip->id}}</h3>
              </div>
              <div class="panel-body">
                <p>Obrik: {{ucwords($spip->obrik->nama)}}</p>
                <p>Unsur: {{ucwords($spip->spip_unsur->nama)}}</p>
                <p>Sub Unsur : {{ucwords($spip->spip_sub_unsur->nama)}}</p>
                <p>Level : {{ucwords($spip->spip_level->nama)}}</p>
                <p>Dokumen : <br>{{$spip->dokumen}}</p>
                <p>Status : {{$spip->status}}</p>
                <p>Catatan: {{$spip->catatan}}</p>
              </div>
            </div>


        </div>
      </div>
    </div>

  @endsection
</div>
