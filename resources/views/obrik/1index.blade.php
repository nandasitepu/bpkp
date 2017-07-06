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
  <script src="{{asset('quill/quill.js')}}"></script>

  <!-- Initialize Quill editor -->
  <script type="text/javascript">
  var quill = new Quill("#editor" , {
    modules: {
      toolbar: [
        [{ header: [1, 2, false] }],
        ['bold', 'italic', 'underline'],
        ['image', 'code-block']
      ]
    },
    placeholder: 'Silahkan Ditambahkan...',
    theme: 'snow'  // or 'bubble'
  });
  </script>
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
            <h4>Audit Universe | BPKP Perwakilan Sulawesi Barat</h4>
            <hr>

            <div class="row">
              <div class="col-md-8" >
                <!-- <div class="table-responsive collapse" id="obrik">
                  <table class="table table-bordered">
                    <thead>
                      <tr class="text-center">
                        <td>No</td>
                        <td>Nama</td>
                        <td>Pimpinan</td>
                        <td>Detail</td>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($obrik as $ob )
                        <tr>
                          <td class="text-center">{{$loop->iteration}}</td>
                          <td>{{ucwords($ob->nama)}}</td>
                          <td>{{ucwords($ob->pimpinan)}}</td>
                          <td class="text-center">
                            <div class="btn-group-xs cool">
                              <a href="{{route("obrik.show", $ob->id)}}" class="btn btn-default">
                                <i class="fa fa-fw fa-eye"></i>View
                              </a>
                              <a href="{{route("obrik.edit", $ob->id)}}" class="btn btn-info">
                                <i class="fa fa-fw fa-edit"></i>Edit
                              </a>
                              <a href="{{route("obrik.edit", $ob->id)}}" class="btn btn-danger">
                                <i class="fa fa-fw fa-trash-o"></i>  Delete
                              </a>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                -->
                <router-view></router-view>
              </div>
              <div class="col-md-4">
                <div>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      @component('_c.search_xs')@endcomponent
                    </div>

                  </div>
                  <a href="{{route('obrik.create')}}">
                    <button type="button" class="btn btn-default btn-block btn-xs">
                      Tambah Obrik <i class="fa fa-fw fa-plus-circle"></i>
                    </button>
                  </a>
                  <hr>
                  <div class="btn-group btn-group-sm">
                    <router-link class="btn btn-default btn-sm" data-target="#vue" data-toggle="collapse" to="/obrik">
                      List Obrik &nbsp;<i class="fa fa-list-ol fa-fw"></i>
                    </router-link>
                    <router-link class="btn btn-default btn-sm" data-target="#vue" data-toggle="collapse" to="/obrik/create">
                      Tambah Obrik &nbsp;<i class="fa fa-plus-circle fa-fw"></i>
                    </router-link>
                  </div>

                </div>
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
