@extends('main')
@section('title')
  {{ucwords($apip->nama)}}
@endsection
@section('stylesheets')

@endsection
<div id="app">
  @section('content')
    <div class="container">
      <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">

              <div class="col-md-8">
                <div class="col-md-6">
                  <h4 class="text-center"><span class="label label-primary">{{ucwords($apip->nama)}}</span></h4 >

                  <div class="text-center"><img class="img-thumbnail" src="{{asset('img/kab/'. $apip->gambar)}}" alt="" height="10px"></div>
                </div>
                <div class="col-md-6">

                  <p><b><i class="fa fa-star-o fa-fw"></i> Inspektur <i class="fa fa-star-o fa-fw"></i>&nbsp;:</b> <br>{{ucwords($apip->pimpinan)}}</p>
                  <hr>

                  <p><b>Kontak</b> <i class="fa fa-envelope-o fa-fw"></i>&nbsp; : <br>{!! $apip->kontak !!}</p>
                  <p><b>Keterangan</b> <i class="fa fa-lightbulb-o fa-fw"></i>&nbsp;: <br>{{$apip->keterangan}}</p>
                </div>
              </div>
              <div class="col-md-4">
                  <p><b>Level APIP <i class="fa fa-map-marker fa-fw"></i>&nbsp; : </b>  <br>
                    Level {{$apip->level}}<br><br></p>
                  <p><b>Pegawai <i class="fa fa-users fa-fw"></i> :</b> <br>{{$apip->total_pegawai}} Orang</p>
                  <p><b>Auditor <i class="fa fa-user-md fa-fw"></i> :</b> <br>10 Orang</p>
                  <p><b>Anggaran <i class="fa fa-money fa-fw"></i>:</b> <br>Rp {{number_format($apip->total_anggaran)}}</p>
              </div>
            </div>

          </div>
      </div>
    </div>
  @endsection
</div>
