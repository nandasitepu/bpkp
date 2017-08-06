@extends('main')
@section('title')
  {{ucwords($apip->nama)}}
@endsection
@section('stylesheets')

@endsection

@section('content')
  {{-- Table Data Umum APIP --}}
  <div class="row">
    <div class="col-md-12">
      <div class="">

          <strong class="text-center">
            <div>
              @if($apip->id === 1)
              <a href="{{route('apip.data', $apip->id)}}" class="btn disabled">
                <i class="fa fa-lg fa-times pull-left "></i>
              </a>
              @else
              <a href="{{route('apip.data', $apip->id-1)}}">
                <i class="fa fa-lg fa-arrow-circle-o-left pull-left"></i>
              </a>
              @endif
              Data Umum APIP
              <a href="{{route('apip.data', $apip->id+1)}}"><i class="fa fa-lg fa-arrow-circle-o-right pull-right"></i></a>
            </div>
          </strong>

      </div>

      <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-4">
              <h4 class="text-center"><span class="label label-primary">{{ucwords($apip->nama)}}</span></h4 >

              <div class="text-center"><img class="img-thumbnail" src="{{asset('img/kab/'. $apip->gambar)}}" alt="" height="10px"></div>
              <br>
            </div>
            <div class="col-md-8">
              <div class="col-md-6">

                <p><b><i class="fa fa-star-o fa-fw"></i> Inspektur <i class="fa fa-star-o fa-fw"></i>&nbsp;:</b> <br>{{ucwords($apip->pimpinan)}}</p>
                <hr>

                <p><b>Kontak</b> <i class="fa fa-envelope-o fa-fw"></i>&nbsp; : <br>{!! $apip->kontak !!}</p>
                <p><b>Keterangan</b> <i class="fa fa-lightbulb-o fa-fw"></i>&nbsp;: <br>{{$apip->keterangan}}</p>
              </div>
              <div class="col-md-6">
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
    <hr>
  </div>
  {{-- Table Kapabilitas APIP --}}
  <div class="row">
    <div class="col-md-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <ul class="fa-ul">
            <li><i class="fa fa-li fa-toggle-right fa-fw"></i>Elemen 1</li>
            <li><i class="fa fa-li fa-toggle-right fa-fw"></i>Elemen 2</li>
            <li><i class="fa fa-li fa-toggle-right fa-fw"></i>Elemen 3</li>
            <li><i class="fa fa-li fa-toggle-right fa-fw"></i>Elemen 4</li>
            <li><i class="fa fa-li fa-toggle-right fa-fw"></i>Elemen 5</li>
            <li><i class="fa fa-li fa-toggle-right fa-fw"></i>Elemen 6</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-10">
      <h4 class="text-center"><span class="label label-info">Kapabilitas APIP</span></h4>
      <hr>
      <div class="table-responsive">
        <table class="table table-bordered table-condensed">
          <thead class="text-center">
            <tr class="info">
              <td>No</td>
              <td>Pernyataan</td>
              <td>Level</td>
              <td>Elemen</td>
              <td>Catatan</td>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td>1</td>
              <td>Kami Telah ...</td>
              <td>1</td>
              <td>Elemen 1</td>
              <td>Tidak ada Catatan</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
@endsection
