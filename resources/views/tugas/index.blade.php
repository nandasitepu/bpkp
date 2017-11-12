@extends('main')
@section('title')
  Penugasan Perwakilan BPKP Provinsi Sulawesi Barat
@endsection

@section('stylesheets')
  <style>
    .file-text { margin-top: .2em; }
    .money-text {margin-top: 2em;}
  </style>
@endsection

@section('content')
  <div class="row"> 
    {{-- Login  --}} 
    <div class="col-md-4">
  
     
            <div style="padding:10px; border:1px solid #ccc">@component('_c.login')@endcomponent</div>
            <br>
            @component('_c.user_menu')@endcomponent
            <br>
            <div>
              <div class="panel panel-default">
                <div class="panel-body">
                    <b>Surat</b>
                    
                      <ul class="list-unstyled">
                        <li>Title</li>
                        <li>Title</li>
                        <li>Title</li>
                      </ul>
                    <hr>
                    <b>Surat Tugas</b>
                      <ul class="list-unstyled">
                        <li>Title</li>
                        <li>Title</li>
                        <li>Title</li>
                      </ul>
                      <hr>
                    <b>Nota Dinas</b>
                      <ul class="list-unstyled">
                        <li>Title</li>
                        <li>Title</li>
                        <li>Title</li>
                      </ul>
                </div>
              </div>
            </div>
         
    
    </div>
    
    {{-- Menu Penugasan --}}
    <div class="col-md-8" id="menu-tugas" style="border: 1px solid #ccc; padding:30px">
      <div>
          <img src="/img/banner/tugas-banner-ok.jpg" class="img-thumbnail" style="width: 100%;height:160px" alt="Second slide">
      </div>
      <div class="text-center">
        <h4><span class="label label-default">Menu Penugasan</span></h4>
      </div>
      <hr>
      <div class="row text-center">
          <div class="col-md-4">
            <h5><b><u> Surat:</u></b> </h5>
            <button class="btn btn-warning fa fa-envelope-o fa-3x"></button>
          </div>
          <div class="col-md-4">
            <h5><b><u> Surat Tugas:</u></b> </h5>
            <a href="{{route('st.index')}}">
              <button class="btn btn-primary">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-file-o fa-stack-2x"></i>
                  <strong class="fa-stack-1x fa-stack-text file-text">ST</strong>
                </span>
              </button>
            </a>
          </div>
          <div class="col-md-4">
            <h5><b><u> ND:</u></b> </h5>
            <button class="btn btn-success">
              <span class="fa-stack fa-lg">
                <i class="fa fa-file-o fa-stack-2x"></i>
                <strong class="fa-stack-1x fa-stack-text file-text"><small>ND</small></strong>
              </span>
            </button>
          </div>
      </div>
      <hr>
      <div class="row text-center">
          <div class="col-md-4">
            <h5><b><u> KM:</u></b> </h5>
            <button class="btn btn-danger">
              <span class="fa-stack fa-lg">
                <i class="fa fa-file-o fa-stack-2x"></i>
                <strong class="fa-stack-1x fa-stack-text file-text"><small>KM</small></strong>
              </span>
            </button>
          </div>
          <div class="col-md-4">
            <h5><b><u> CostSheet:</u></b> </h5>
            <button class="btn btn-default">
              <span class="fa-stack">
                <i class="fa fa-money fa-stack-2x"></i>
                <strong class="fa-stack-1x money-text">Rp</strong>
              </span>
            </button>
          </div>
          <div class="col-md-4">
            <h5><b><u> Laporan:</u></b> </h5>
            <button class="btn btn-info">
              <span class="fa-stack fa-lg">
                <i class="fa fa-file-text-o fa-stack-2x"></i>
                <strong class="fa-stack fa-stack-text file-text"><small>L</small></strong>
              </span>
            </button>
          </div>
      </div>
    </div>
  </div>
@endsection
