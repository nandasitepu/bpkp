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
          <h3>Sistem Pengendalian Intern Pemerintah    <span class="label label-warning" >(SPIP)</span></h3>

          <hr>

          <div class="main">
          <p>Pengertian Sistem Pengendalian Intern menurut PP Nomor 60 Tahun 2008 tentang SPIP adalah:</p>
          <blockquote cite="http://www.bpkp.go.id">
            <small class="text-justify">
              "Proses yang integral pada tindakan dan kegiatan yang dilakukan secara terus menerus oleh pimpinan dan seluruh pegawai untuk memberikan keyakinan memadai atas tercapainya tujuan organisasi melalui kegiatan yang efektif dan efisien, keandalan pelaporan keuangan, pengamanan aset negara, dan ketaatan terhadap peraturan perundang-undangan."
            </small>
          </blockquote>

          </div>
        </div>
        <div class="col-md-5">
          @include('charts.spip')
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="text-center">
          <div class="col-md-1 col-xs-12">
          Sulbar
          <div class="text-center">
            <img class="img-thumbnail" src="../img/kab/sulbar.jpg" alt="" height="50px ! important"  >
          </div>
          <br>
          <a href="{{url('app/spip/kab/1')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
          <br>
        </div>
          <div class="col-md-1">
           Mamuju
            <div class="">
              <img class="img-thumbnail" src="../img/kab/mamuju.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/kab/2')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
          <div class="col-md-1">
           Majene
            <div class="">
              <img class="img-thumbnail" src="../img/kab/majene.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/kab/3')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
          <div class="col-md-1">
           Mamasa
            <div class="">
              <img class="img-thumbnail" src="../img/kab/mamasa.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/kab/4')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
          <div class="col-md-1">
           Polman
            <div class="">
              <img class="img-thumbnail" src="../img/kab/polman.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/kab/5')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
          <div class="col-md-1">
           Mateng
            <div class="">
              <img class="img-thumbnail" src="../img/kab/mateng.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/kab/6')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>
          <div class="col-md-1">
           Matra
            <div class="">
              <img class="img-thumbnail" src="../img/kab/matra.jpg" alt="" height="100px" >
            </div>
            <br>
            <a href="{{url('app/spip/kab/7')}}" class="btn btn-default btn-xs btn-block"> Detail</a>
            <br>
          </div>

          <div class="col-md-1">

          </div>
        </div>

        <div class="col-md-3 well ">
          <h4 class=""><span class="label label-danger">Tentang SPIP</span>
            &nbsp;
            <a href="{{route('spip.tentang')}}"><i class="fa fa-fw fa-file-o text-primary pull-right"></i></a>

          </h4>
            <h4 class=""><span class="label label-primary">Pedoman Penilaian</span>
              &nbsp;
              <a href="https://www.dropbox.com/s/f27kflivusacppv/Pedoman%20Penilaian%20Maturitas%20SPIP.pdf?dl=0">
                <i class="fa fa-fw fa-file-o text-primary pull-right"></i>
              </a>
            </h4>
            <h4 class=""><span class="label label-success">Nilai Maturitas SPIP</span>

              &nbsp;<i class="fa fa-fw fa-file-o text-primary pull-right"></i>
            </h4>

          </div>
      </div>
    </div>
  @endsection
</div>
