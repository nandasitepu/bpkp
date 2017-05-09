@extends('main')
@section('title')
  Aparat Pengawasan Internal Pemerintah (APIP) | lvUP
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
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-body">
            @include('charts.elemen_apip')
        </div>
      </div>
    </div>
    <div class="col-md-5">
        <div class="panel panel-default">

          <div class="panel-body">
            <h4 ><span class="btn btn-default"><i class="fa fa-heart-o fa-fw"></i> <b>Pedoman Peningkatan Kapabilitas APIP</b></span></h4>
            <hr>
            <h5>Ada 6 Elemen</h5>
            <ul class="fa-ul">
              <li><i class="fa-li fa fa-star-o"></i>  <span class="label label-primary">Elemen 1</span>
               | Peran dan Layanan <i class="fa fa-file-text-o"></i></li>
              <li><i class="fa-li fa fa-star-o"></i> <span class="label label-success">Elemen 2</span> | Pengelolaan SDM <i class="fa fa-file-text-o"></i></li>
              <li><i class="fa-li fa fa-star-o"></i> <span class="label label-info">Elemen 3</span> | Praktek Profesional <i class="fa fa-file-text-o"></i></li>
              <li><i class="fa-li fa fa-star-o"></i> <span class="label label-warning">Elemen 4</span> | Akuntabilitas dan Manajemen Kinerja
              <i class="fa fa-file-text-o"></i></li>
              <li><i class="fa-li fa fa-star-o"></i> <span class="label label-danger">Elemen 5</span> | Budaya dan Organisasi <i class="fa fa-file-text-o"></i></li>
              <li><i class="fa-li fa fa-star-o"></i> <span class="label label-default">Elemen 6</span> | Struktur dan Tata Kelola <i class="fa fa-file-text-o"></i></li>
            </ul>
          </div>

        </div>
      </div>
  </div>
</div>
@endsection
