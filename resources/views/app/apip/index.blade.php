@extends('main')
@section('title')
  Aparat Pengawasan Internal Pemerintah (APIP)
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
      <div class="col-md-8">
        <h3>Aparat Pengawasan Intern Pemerintah (APIP)</h3>
        <hr>
        <span></span>
        <div class="main">
        <p>Aparat Pengawasan Intern Pemerintah (APIP) adalah instansi pemerintah yang dibentuk dengan tugas melaksanakan pengawasan intern (audit intern) di lingkungan pemerintah pusat dan/atau pemerintah daerah,</p>
        <blockquote cite="http://www.bpkp.go.id">
          <small> terdiri dari:
                <li>Badan Pengawasan Keuangan dan Pembangunan (BPKP)</li>
                <li>Inspektorat jenderal kementerian, inspektorat/unit pengawasan intern pada kementerian negara, inspektorat utama/inspektorat lembaga pemerintah non kementerian, inspektorat/unit pengawasan intern pada kesekretariatan lembaga tinggi negara dan lembaga negara, </li>
                <li>Inspektorat provinsi/kabupaten/kota; dan unit pengawasan intern pada badan hukum pemerintah lainnya sesuai dengan peraturan perundang-undangan</li>

          </small>
        </blockquote>
        </div>
        <div class="row text-center">
            <div class="col-md-2">
            Inspektorat
              <div class="">
                <img src="../img/kab/mamuju.jpg" alt="" height="100px" >
              </div>
              <br>
              <a href="{{route('spip.mamuju')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
              <br>
            </div>
            <div class="col-md-2">
              Inspektorat
              <div class="">
                <img src="../img/kab/majene.jpg" alt="" height="100px" >
              </div>
              <br>
              <a href="#" class="btn btn-default btn-xs btn-block"> Detail</a>
              <br>
            </div>
            <div class="col-md-2">
              Inspektorat
              <div class="">
                <img src="../img/kab/polman.jpg" alt="" height="100px" >
              </div>
              <br>
              <a href="#" class="btn btn-default btn-xs btn-block"> Detail</a>
              <br>
            </div>
            <div class="col-md-2">
                Inspektorat
              <div class="">
                <img src="../img/kab/mamasa.jpg" alt="" height="100px" >
              </div>
              <br>
              <a href="#" class="btn btn-default btn-xs btn-block"> Detail</a>
              <br>
            </div>
            <div class="col-md-2">
            Inspektorat
              <div class="">
                <img src="../img/kab/matra.jpg" alt="" height="100px" >
              </div>
              <br>
              <a href="#" class="btn btn-default btn-xs btn-block"> Detail</a>
              <br>
            </div>
            <div class="col-md-2">
                Inspektorat
              <div class="">
                <img src="../img/kab/mateng.jpg" alt="" height="100px" >
              </div>
              <br>
              <a href="#" class="btn btn-default btn-xs btn-block"> Detail</a>
              <br>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">

          <div class="panel-body">
              @include('charts.apip')
          </div>

        </div>
        <div class="col-md-6 col-xs-6">
          <img src="../img/instansi/aaipi.jpg" alt="" height="100px" >
        </div>
        <div class="col-md-6 col-xs-6">
          <img src="../img/instansi/iia.jpg" alt="" height="100px" >
        </div>
      </div>
    </div>
    <hr>

  </div>

@endsection
