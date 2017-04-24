@extends('main')
@section('title')
  SPIP Kabupaten Mamuju
@endsection
@section('stylesheets')
  <link rel="stylesheet" href="#">
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h4>SPIP Pemerintah Daerah Kabupaten Mamuju</h4>
        <hr>
        <p>Level Maturitas Kabupaten {{$obrik->nama}} = 2.648</p>
        <p>Berikut Pemetaan Dokumen SPIP Pada Pemerintah Kabupaten Mamuju</p>


        <!-- Test -->
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Lingkungan Pengendalian</a></li>
          <li><a data-toggle="tab" href="#menu1">Penilaian Risiko</a></li>
          <li><a data-toggle="tab" href="#menu2">Kegiatan Pengendalian</a></li>
          <li><a data-toggle="tab" href="#menu3">Informasi dan Komunikasi</a></li>
          <li><a data-toggle="tab" href="#menu4">Pemantauan Berkelanjutan</a></li>
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <h3>Lingkungan Pengendalian</h3>
            <table class="table table-condensed table-bordered">
              <thead>
                <tr class="text-center">
                  <td>No</td>
                  <td>Sub Unsur SPIP</td>
                  <td>Level</td>
                  <td>Dokumen</td>
                  <td>Catatan</td>
                </tr>
              </thead>
              <tbody>

                @forelse ($spip_mamuju as $spip )
                <tr>
                  <td width="1%">
                    @if ($spip->level_spip_id == 1)
                      {{$spip->sub_unsur_spip_id}}
                    @endif
                  </td>
                  <td width="40%">
                    @if ($spip->level_spip_id == 1 && $spip->unsur_spip_id == 1)
                      {{$spip->sub_unsur_spip->nama}}
                    @endif
                  </td>
                  <td width="20%" class="text-center">{{$spip->level_spip_id}}</td>
                  <td width="20%" class="text-center">{{$spip->dokumen}}</td>
                  <td width="20%" class="text-center">{{$spip->catatan}}</td>

                </tr>
                @empty
                  Kosong
                @endforelse
              </tbody>
            </table>
          </div>
          <div id="menu1" class="tab-pane fade">
            <h3>Penilaian Risiko</h3>
            <p>Some content in menu 1.</p>
          </div>
          <div id="menu2" class="tab-pane fade">
            <h3>Kegiatan Pengendalian</h3>
            <p>Some content in menu 2.</p>
          </div>
          <div id="menu3" class="tab-pane fade">
            <h3>Informasi dan Komunikasi</h3>
            <p>Some content in menu 1.</p>
          </div>
          <div id="menu4" class="tab-pane fade">
            <h3>Pemantauan Berkelanjutan</h3>
            <p>Some content in menu 2.</p>
          </div>
        </div>

        <hr>
        <div class="table-responsive">
          <!-- OFF DULU
          <table class="table table-condensed table-bordered">
            <thead>
              <tr class="text-center">
                <td>No</td>
                <td>Sub Unsur SPIP</td>
                <td>Level</td>
                <td>Dokumen</td>
                <td>Catatan</td>
              </tr>
            </thead>
            <tbody>

              @foreach ($spip_mamuju as $spip)
              <tr>
                <td width="1%">
                  @if ($spip->level_spip_id == 1)
                    {{$spip->sub_unsur_spip_id}}
                  @endif
                </td>
                <td width="40%">
                  @if ($spip->level_spip_id == 1)
                    {{$spip->sub_unsur_spip->nama}}
                  @endif
                </td>
                <td width="20%" class="text-center">{{$spip->level_spip_id}}</td>
                <td width="20%" class="text-center">{{$spip->dokumen}}</td>
                <td width="20%" class="text-center">{{$spip->catatan}}</td>
              </tr>
                @endforeach
            </tbody>
          </table>
          -->
        </div>
        </div>
      <div class="col-md-2 text-center">
        <img src="{{asset('img/kab/mamuju.jpg')}}" alt="" height="100px" >
        <h5 class="label label-primary">Pemerintah Kabupaten Mamuju</h5>
        <hr>
        <div class="form-group">
          <label for="sel1">Pilih Pemda:</label>
          <select class="form-control" id="kabupaten">
            <option></option>
            <option>Mamuju</option>
            <option>Majene</option>
            <option>Matra</option>
            <option>Mateng</option>
            <option>Mamasa</option>
            <option>Polman</option>
          </select>
        </div>
      </div>
    </div>
  </div>
@endsection
