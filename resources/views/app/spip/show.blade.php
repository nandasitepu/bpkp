@extends('main')
@section('title')
  SPIP {{$obrik->nama}}
@endsection
@section('stylesheets')
  <style media="screen">
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    background-color: green;
  }
  </style>
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h4>SPIP Kabupaten {{ucwords($obrik->nama)}}</h4>
        <hr>
        <p>Maturitas {{ucwords($obrik->nama)}}
          <span class="pull-right">Nilai SPIP =
            <span class="label label-default" style="font-size:40px">{{$obrik->nilai_spip}}</span>
          </span>
        </p>
        <p>Berikut Pemetaan Dokumen SPIP Pada Pemerintah {{ucwords($obrik->nama)}}</p>
        <!-- Test -->
        <div class="text-center cool">
          <div class="btn-group hidden-xs" style="box-shadow: 1px 1px 1px 2px #000" role="group" aria-label="...">
            <a class="btn btn-default" data-toggle="tab" href="#home"># SPIP</a>
            <a class="btn btn-primary" data-toggle="tab" href="#1">Lingkungan Pengendalian</a>
            <a class="btn btn-success" data-toggle="tab" href="#2">Penilaian Risiko</a>
            <a class="btn btn-info" data-toggle="tab" href="#3">Kegiatan Pengendalian</a>
            <a class="btn btn-warning" data-toggle="tab" href="#4">Informasi dan Komunikasi</a>
            <a class="btn btn-danger" data-toggle="tab" href="#5">Pemantauan Berkelanjutan</a>
          </div>
        </div>
        <div class="text-center cool">
          <div class="btn-group-vertical visible-xs"  role="group" aria-label="...">
            <a class="btn btn-default" data-toggle="tab" href="#home"># SPIP</a>
            <a class="btn btn-primary" data-toggle="tab" href="#1">Lingkungan Pengendalian</a>
            <a class="btn btn-success" data-toggle="tab" href="#2">Penilaian Risiko</a>
            <a class="btn btn-info" data-toggle="tab" href="#3">Kegiatan Pengendalian</a>
            <a class="btn btn-warning" data-toggle="tab" href="#4">Informasi dan Komunikasi</a>
            <a class="btn btn-danger" data-toggle="tab" href="#5">Pemantauan Berkelanjutan</a>
          </div>
        </div>



        <hr>
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <h4 class="text-center"><span class="label label-default">Kondisi SPIP</span></h4>
            @component('_c.table_spip')
              <!-- All -->
              @include('_s.edit')
            @endcomponent
          </div>
          <div id="1" class="tab-pane fade">
            <h4>Lingkungan Pengendalian</h4>
            @component('_c.table_spip')
              <!-- Lingkungan Pengendalian -->
              @include('_s.lipeng')
            @endcomponent
          </div>
          <div id="2" class="tab-pane fade">
            <h4>Penilaian Risiko</h4>
            @component('_c.table_spip')
              @include('_s.risk')
            @endcomponent
          </div>
          <div id="3" class="tab-pane fade">
            <h4>Kegiatan Pengendalian</h4>
            @component('_c.table_spip')
              @include('_s.kepeng')
            @endcomponent
          </div>
          <div id="4" class="tab-pane fade">
            <h4>Informasi dan Komunikasi</h4>
            @component('_c.table_spip')
              @include('_s.infokom')
            @endcomponent
          </div>
          <div id="5" class="tab-pane fade">
            <h4>Pemantauan Berkelanjutan</h4>
            @component('_c.table_spip')
              @include('_s.pemantauan')
            @endcomponent
          </div>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <img src="{{asset('img/kab/'. $obrik->short . '.jpg')}}" alt="" height="100px" >
        <h5 class="label label-primary">Pemerintah Kabupaten {{$obrik->short}}</h5>
        <div class="form-group">
          <label for="sel1">Pemda:</label>
          <select class="form-control" id="kabupaten" onchange="location=this.value">
            <option># Pilih Dulu #</option>
            <option value="../1/provinsi">Provinsi</option>
            <option value="../2/mamuju">Mamuju</option>
            <option value="../3/majene">Majene</option>
            <option value="../4/mamasa">Mamasa</option>
            <option value="../5/polman">Polman</option>
            <option value="../6/mateng">Mateng</option>
            <option value="../7/matra">Matra</option>
          </select>
        </div>
        @if (Auth::check())
        <span class="input-group-addon"><i class="fa fa-edit fa-2x"></i>
          <a href="{{url('app/spip/'. $obrik->id.'/'.$obrik->short.'/edit')}}">
            <button type="button" style="margin-top:20px" class="btn btn-sm btn-block btn-primary">
              Edit Data
            </button>
          </a>
        </span>
        @endif
      </div>
    </div>
  </div>
@endsection
