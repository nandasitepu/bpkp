@extends('main')
@section('title')
  Obrik | Audit Universe
@endsection
@section('stylesheets')
  <link href="{{asset('quill/quill.snow.css')}}" rel="stylesheet">
  <style media="screen">
  #editor {
    height: 200px;
  }
  </style>
  <style media="screen">
    .cool
    {
      box-shadow: 1px 1px 1px 1px #ffc;
      background-color: #fff;
    }
  </style>
@endsection
@section('bot_scripts')
  <script src="{{asset('js/myvue.js')}}"></script>
  <script src="{{asset("swal/dist/sweetalert.min.js")}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset("swal/dist/sweetalert.css")}}">
  @include('sweet::alert')



@endsection
@section('content')
  <div class="container" id="app">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default" >
          <div class="panel-body">


            <div class="row">
              <div class="col-md-4">
                <div>
                  <div class="text-center">
                    <h4 >
                      <span class="label label-default">// Audit Universe // Obrik //</span>
                    </h4>
                    <strong>Perwakilan BPKP Prov.  Sulawesi Barat</strong>
                  </div>

                  <hr>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      @component('_c.search_xs')@endcomponent
                    </div>

                  </div>
                  <div class="panel panel-default">

                    <div class="panel-body">
                      <div class="btn-group btn-group-sm text-center">
                        <router-link class="btn btn-info btn-sm" data-target="#vue" data-toggle="collapse" to="/obrik">
                          Table &nbsp;<i class="fa fa-table fa-fw"></i>
                        </router-link>
                        <router-link class="btn btn-success btn-sm" data-target="#vue" data-toggle="collapse" to="/obrik/grid">
                          Grid &nbsp;<i class="fa fa-th fa-fw"></i>
                        </router-link>
                        <router-link class="btn btn-default btn-sm" data-target="#vue" data-toggle="collapse" to="/obrik/create">
                          Tambah &nbsp;<i class="fa fa-plus-circle fa-fw"></i>
                        </router-link>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-md-8" >
                <router-view></router-view>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">


      </div>
    </div>
  </div>
@endsection
