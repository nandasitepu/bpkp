@extends('main')
@section('title')
  Obrik | Audit Universe
@endsection
@section('stylesheets')
<style media="screen">
  .cool
  {
    box-shadow: 1px 1px 1px 1px #ffc;
    background-color: #fff;
  }
</style>
@endsection
@section('bot_scripts')
  <script src="{{asset("swal/dist/sweetalert.min.js")}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset("swal/dist/sweetalert.css")}}">
  @include('sweet::alert')
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">

          <div class="panel-body">
            <h4>Audit Universe | BPKP Perwakilan Sulawesi Barat</h4>
            <hr>
            <div class="row">
              <div class="col-md-8">

                <hr>
                <div class="table-responsive">
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
              </div>
              <div class="col-md-4">
                <hr>

                <div class="">
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
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
