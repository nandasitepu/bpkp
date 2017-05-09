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
            <table class="table-condensed">
              <thead>
                <tr class="text-center">
                  <td>No</td>
                  <td>Unsur</td>
                  <td>Sub Unsur SPIP</td>
                </tr>
              </thead>
              <tbody>
                @foreach (App\Models\SPIP::where(['level_spip_id' => 1, 'obrik_id' => 1])->get() as $s)
                  <tr>
                    <td class="col-md-1 text-center">{{$loop->iteration}}</td>
                    <td class="col-md-5">{{$s->unsur_spip->nama}}</td>
                    <td class="col-md-6">{{$s->sub_unsur_spip->nama}}</td>
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
