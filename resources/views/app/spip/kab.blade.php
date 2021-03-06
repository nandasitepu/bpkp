@extends('main')
@section('title')
  SPIP {{ucwords($pemda->nama)}}
@endsection
@section('stylesheets')
  <style media="screen">
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    background-color: green;
  }
  .absolute {
   right: 30px;
   position: fixed;
   overflow: auto;
   z-index: 1;
  }
  </style>
@endsection

@section('content')
  <div class="row">
      <div class="col-md-10">
        <h2 class="text-center"><span class="btn btn-primary"><b>SPIP {{ucwords($pemda->nama)}}</b></span></h2>
        <div class="row">
          <div class="col-md-12">
            <p>Berikut Nilai Maturitas & Pemetaan Dokumen SPIP Pada Pemerintah {{ucwords($pemda->nama)}}</p>
          </div>
          <div class="col-md-7" style="border:1px solid #ccc">
            @include('charts.spip_show')
            <div class="label label-default pull-right">Last Updated : {{ date('M-Y ') }} </div>
            <br>
        

          </div>
          <div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-body">
                <h4><span class="label label-success">Catatan | SPIP {{ucwords($pemda->nama)}} </span></h4>
                <hr>
                @if (Auth::guest())
                <ul class="fa-ul text-center">
                 <a href="{{ route('login') }}"> <li class="btn btn-default btn-sm btn-block">Harus Login</li></a>
                </ul>
                @else
                  <ul class="fa-ul">
                  @foreach ($spip as $r)
                    @if (!empty($r->catatan))
                      <li><i class="fa fa-li fa-times-circle-o"></i>{{$r->catatan}}</li>
                    @else
                      <span></span>
                    @endif
                  @endforeach
                  </ul>
                @endif
              </div>

            </div>

          </div>
        </div>
        <div class="row">
          <hr>
        </div>

        <!-- Test -->
        <div class="text-center cool">
          <div class="btn-group hidden-xs" style="box-shadow: 1px 1px 1px 2px #000" role="group" aria-label="...">
            <a class="btn btn-default" data-toggle="tab" href="#home">SPIP</a>
            <a class="btn btn-primary" data-toggle="tab" href="#unsur1">Lingkungan Pengendalian</a>
            <a class="btn btn-success" data-toggle="tab" href="#unsur2">Penilaian Risiko</a>
            <a class="btn btn-info" data-toggle="tab" href="#unsur3">Kegiatan Pengendalian</a>
            <a class="btn btn-warning" data-toggle="tab" href="#unsur4">Informasi dan Komunikasi</a>
            <a class="btn btn-danger" data-toggle="tab" href="#unsur5">Pemantauan Berkelanjutan</a>
          </div>
        </div>
        <div class="text-center cool">
          <div class="btn-group-vertical visible-xs"  role="group" aria-label="...">
            <a class="btn btn-default" data-toggle="tab" href="#home">SPIP</a>
            <a class="btn btn-primary" data-toggle="tab" href="#unsur1">Lingkungan Pengendalian</a>
            <a class="btn btn-success" data-toggle="tab" href="#unsur2">Penilaian Risiko</a>
            <a class="btn btn-info" data-toggle="tab" href="#unsur3">Kegiatan Pengendalian</a>
            <a class="btn btn-warning" data-toggle="tab" href="#unsur4">Informasi dan Komunikasi</a>
            <a class="btn btn-danger" data-toggle="tab" href="#unsur5">Pemantauan Berkelanjutan</a>
          </div>
        </div>
        <hr>
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <h4>Pemetaan Dokumen SPIP Pemerintah {{ucwords($pemda->nama)}}</h4>
            @component('_c.table_spip')
              <!-- All -->
              @include('_s.all')
            @endcomponent
          </div>
          <div id="unsur1" class="tab-pane fade">
            <h4>Lingkungan Pengendalian</h4>
            @component('_c.table_spip')
              <!-- Lingkungan Pengendalian -->
              @include('_s.1lipeng')
            @endcomponent
          </div>
          <div id="unsur2" class="tab-pane fade">
            <h4>Penilaian Risiko</h4>
            @component('_c.table_spip')
              @include('_s.2risk')
            @endcomponent
          </div>
          <div id="unsur3" class="tab-pane fade">
            <h4>Kegiatan Pengendalian</h4>
            @component('_c.table_spip')
              @include('_s.3kepeng')
            @endcomponent
          </div>
          <div id="unsur4" class="tab-pane fade">
            <h4>Informasi dan Komunikasi</h4>
            @component('_c.table_spip')
              @include('_s.4infokom')
            @endcomponent
          </div>
          <div id="unsur5" class="tab-pane fade">
            <h4>Pemantauan Berkelanjutan</h4>
            @component('_c.table_spip')
              @include('_s.5pemantauan')
            @endcomponent
          </div>
        </div>
      </div>    
      <div class="col-md-2 well text-center hidden-xs absolute">
    
        <img src="{{asset('img/kab/'. $pemda->short . '.jpg')}}" alt="" height="100px" >
        <h5 class="label label-primary">Pemerintah {{ucwords($pemda->nama)}}</h5>
        <h3>
          <span class="label label-default">Nilai SPIP = {{$pemda->nilai_spip}}</span>
        </h3>
        <hr>
        <div class="form-group text-center">
          <select class="form-control input-sm" id="kabupaten" onchange="location=this.value">
            <option># Pemda #</option>
            <option value="../kab/1">Provinsi</option>
            <option value="../kab/2">Mamuju</option>
            <option value="../kab/3">Majene</option>
            <option value="../kab/4">Mamasa</option>
            <option value="../kab/5">Polman</option>
            <option value="../kab/6">Mateng</option>
            <option value="../kab/7">Matra</option>
          </select>
        </div>

      </div>
      <div class="col-md-2 text-center visible-xs">
     
        <img src="{{asset('img/kab/'. $pemda->short . '.jpg')}}" alt="" height="100px" >
        <h5 class="label label-primary">Pemerintah {{ucwords($pemda->nama)}}</h5>
        <h3>
          <span class="label label-default">Nilai SPIP = {{$pemda->nilai_spip}}</span>
        </h3>
        <hr>
        <div class="form-group text-center">
          <select class="form-control" id="kabupaten" onchange="location=this.value">
            <option># Pemda #</option>
            <option value="../kab/1">Provinsi</option>
            <option value="../kab/2">Mamuju</option>
            <option value="../kab/3">Majene</option>
            <option value="../kab/4">Mamasa</option>
            <option value="../kab/5">Polman</option>
            <option value="../kab/6">Mateng</option>
            <option value="../kab/7">Matra</option>
          </select>
        </div>

      </div>
    </div>
@endsection


@section('bot_scripts')
  <script src="{{asset("swal/dist/sweetalert.min.js")}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset("swal/dist/sweetalert.css")}}">
  @include('sweet::alert')
@endsection
