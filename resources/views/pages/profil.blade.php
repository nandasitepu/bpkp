@extends('main')
@section('title')
  Profil Kantor
@endsection
@section('stylesheets')

@endsection
<div id="app">
  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-body">
              <h4 class="text-center"><b>Profil Perwakilan BPKP Sulawesi Barat</b></h4>
              <hr>
              <p>Mulai beroperasi sejak tahun 2012
                <br>dengan Total Pegawai: 79 Orang</p>
              <hr>
              <div style="width:90%">
                @include('charts.pegawai')
                @include('charts.LP')
              </div>


            </div>
          </div>
        </div>
        <div class="col-md-4 well">
          <b>Terdiri dari 6 Bidang:</b>
          <ol>
            <li>Instansi Pemerintah Pusat (IPP)</li>
            <li>Akuntabilitas Pemerintah Daerah (APD)</li>
            <li>Akuntan Negara (AN)</li>
            <li>Investigasi (INV)</li>
            <li>Program Pelaporan dan Pembinaan APIP (P3A)</li>
            <li>Tata Usaha (TU)</li>
          </ol>
        </div>
        <div class="col-md-4 well">
          <h5><b>// Link</b></h5>
          <ul style="none">
            <li><a href="#">Struktur Organisasi</a></li>
            <li><a href="#">LAKIP</a></li>
            <li><a href="#">Perjanjian Kinerja</a></li>
            <li><a href="/pegawai">Daftar Pegawai</a></li>

          </ul>



        </div>
      </div>
    </div>
  @endsection
</div>
