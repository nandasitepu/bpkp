@extends('main')
@section('stylesheets')
  <style media="screen">
  .cool {
    box-shadow: 1px 1px 1px 2px #000;
  }
  </style>

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
                        <td>Short</td>
                        <td>Detail</td>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($obrik as $ob )
                        <tr>
                          <td class="text-center">{{$loop->iteration}}</td>
                          <td>{{ucwords($ob->nama)}}</td>
                          <td class="text-center">{{ucwords($ob->short)}}</td>
                          <td class="text-center">
                            <div class="btn-group btn-group-xs cool">
                              <button type="button" class="btn btn-success">
                                <i class="fa fa-fw fa-eye"></i>View
                              </button>
                              <button type="button" class="btn btn-info">
                                <i class="fa fa-fw fa-edit"></i>Edit
                              </button>
                              <button type="button" class="btn btn-danger">
                              <i class="fa fa-fw fa-trash-o"></i>  Delete
                              </button>
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
                  @component('_c.social')@endcomponent
                </div>
                <div class="">
                  <div class="panel panel-default">

                    <div class="panel-body">
                      @component('_c.search_xs')@endcomponent
                    </div>

                  </div>
                  <button type="button" class="btn btn-default btn-block btn-xs">
                    Tambah Obrik <i class="fa fa-fw fa-plus-circle"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
