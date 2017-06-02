@extends('main')
@section('title')
  Sistem Pengendalian Intern Pemerintah (SPIP) | Tentang SPIP
@endsection
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
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="panel panel-default">
          <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t31.0-8/18558727_10155283256127641_6548132552798663464_o.jpg?oh=480caf33df5e631e1d2514ea81cc56d1&oe=59BF48A8" alt="BPKP Konsisten Mengawal Keuangan Desa" width="100%">
          <div class="panel-body">
              <h4 ><span class="btn btn-warning btn-block"><i class="fa fa-heart-o fa-fw"></i> <b>Tentang SPIP </b></span></h4>
              <br>
              <h5><b>Ada 5 Unsur :</b></h5>
              <ul class="fa-ul">
                <li><i class="fa-li fa fa-star-o"></i>  <span class="label label-primary">Unsur 1</span>
                 | Lingkungan Pengendalian <i class="fa fa-file-text-o"></i></li>
                <li><i class="fa-li fa fa-star-o"></i> <span class="label label-success">Unsur 2</span> | Penilaian Risiko <i class="fa fa-file-text-o"></i></li>
                <li><i class="fa-li fa fa-star-o"></i> <span class="label label-info">Unsur 3</span> | Kegiatan Pengendalian <i class="fa fa-file-text-o"></i></li>
                <li><i class="fa-li fa fa-star-o"></i> <span class="label label-warning">Unsur 4</span> | Informasi dan Komunikasi
                <i class="fa fa-file-text-o"></i></li>
                <li><i class="fa-li fa fa-star-o"></i> <span class="label label-danger">Unsur 5</span> | Pemantauan Berkelanjutan <i class="fa fa-file-text-o"></i></li>

              </ul>
            </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="panel panel-default">
          <div class="panel-body">
            @include('charts.spip_unsur')
            <!-- Table Penilaian SPIP -->
            <div class="table table-responsive">
              <table class="table-condensed table-bordered table-striped table-hover">
                <thead>
                  <tr class="text-center">
                    <td>No</td>
                    <td>Unsur</td>
                    <td>Sub Unsur SPIP</td>
                  </tr>
                </thead>
                <tbody>
                  <!-- Gak KeBaca Di Server Prod -->
                  @foreach ($spip_unsur as $s)
                    <tr>
                      <td class="col-md-1 text-center">{{$loop->iteration}}</td>
                      <td class="col-md-5">{{ucwords($s->spip_unsur->nama)}}</td>
                      <td class="col-md-6">{{$s->spip_sub_unsur->nama}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
