@extends('main')
@section('title')
  Obrik | {{ucwords($obrik->nama)}}
@endsection
@section('stylesheets')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            ID:{{{$obrik->id}}} // Obrik
            <h4>{{ucwords($obrik->nama)}}</h4>
            <hr>
            <div class="row">
              <div class="col-md-2">
                <div class="">
                  <img class="img-thumbnail" src="{{$obrik->foto}}" alt="">
                </div>
              </div>
              <div class="col-md-5">
                <h5 class="bold">Pimpinan <i class="fa fa-star-o fa-fw"></i> :</h5>
                <div >
                 {{$obrik->pimpinan}}
                </div>
                <h5 class="bold">Anggaran <i class="fa fa-money fa-fw"></i>:</h5>
                <div >
                 {{$obrik->anggaran}}
                </div>
              </div>
              <div class="col-md-5">
                <h5 class="bold">Lokasi <i class="fa fa-map-marker fa-fw"></i>:</h5>
                <div >
                 {{$obrik->lokasi}}
                </div>
                <h5 class="bold">Kontak <i class="fa fa-mobile-phone fa-fw"></i>:</h5>
                <div >
                 {{$obrik->kontak}}
                </div>
                <h5 class="bold">Keterangan <i class="fa fa-info-circle fa-fw"></i>:</h5>
                <div >
                 {{$obrik->keterangan}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
