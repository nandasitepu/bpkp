@extends('main')
@section('title')
  Sistem Pengawasan Internal Pemerintah
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
<div id="app">
  @section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h3>Sistem Pengendalian Intern Pemerintah (SPIP)</h3>
          <hr>
          <span></span>
          <div class="main">
          <p>Pengertian Sistem Pengendalian Intern menurut PP Nomor 60 Tahun 2008 tentang SPIP adalah:</p>
          <blockquote cite="http://www.bpkp.go.id">
            <small>"Proses yang integral pada tindakan dan kegiatan yang dilakukan secara terus menerus oleh pimpinan dan seluruh pegawai untuk memberikan keyakinan memadai atas tercapainya tujuan organisasi melalui kegiatan yang efektif dan efisien, keandalan pelaporan keuangan, pengamanan aset negara, dan ketaatan terhadap peraturan perundang-undangan."
            </small>
          </blockquote>
          </div>
        </div>
        <div class="col-md-5">
          @include('charts.spip')
        </div>
      </div>
      <hr>
      <div class="row text-center">
          <div class="col-md-2">
            Kabupaten Mamuju
            <div class="">
              <img src="../img/kab/mamuju.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/2/mamuju')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
          <div class="col-md-2">
            Kabupaten Majene
            <div class="">
              <img src="../img/kab/majene.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/3/majene')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
          <div class="col-md-2">
            Kabupaten Polman
            <div class="">
              <img src="../img/kab/polman.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/5/polman')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
          <div class="col-md-2">
            Kabupaten Mamasa
            <div class="">
              <img src="../img/kab/mamasa.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/4/mamasa')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
          <div class="col-md-2">
            Kabupaten Matra
            <div class="">
              <img src="../img/kab/matra.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/7/matra')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
          <div class="col-md-2">
            Kabupaten Mateng
            <div class="">
              <img src="../img/kab/mateng.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/6/mateng')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
      </div>
    </div>
  @endsection
</div>
