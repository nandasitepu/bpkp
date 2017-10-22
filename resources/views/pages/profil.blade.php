@extends('main')
@section('title')
  Profil Kantor
@endsection
@section('stylesheets')

@endsection

@section('content')
  <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4 class="text-center"><b>Profil Perwakilan BPKP Sulawesi Barat</b></h4>
            <hr>
            <p>Mulai beroperasi sejak tahun 2012
              <br>dengan Total Pegawai: 79 Orang</p>
            <hr>
            <div class="col-md-6 col-xs-12">
              @include('charts.pegawai')
            </div>
            <div class="col-md-6 col-xs-12">
              @include('charts.LP')
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-4 well">
        <div class="panel panel-default">
          <div class="panel-body">
            <b>Terdiri dari 6 Bidang:</b>
            <ol>
              <li>Tata Usaha (TU)</li>
              <li>Instansi Pemerintah Pusat (IPP)</li>
              <li>Akuntabilitas Pemerintah Daerah (APD)</li>
              <li>Akuntan Negara (AN)</li>
              <li>Investigasi (INV)</li>
              <li>Program Pelaporan dan Pembinaan APIP (P3A)</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="col-md-4 well">
        <div class="panel panel-default">
          <div class="panel-body">
            <h5><b>// Peta Situs</b></h5>
            <ul style="none">
              <li><a href="#">Struktur Organisasi</a></li>
              <li><a href="#">LAKIP</a></li>
              <li><a href="#">Perjanjian Kinerja</a></li>
              <li><a href="/pegawai">Daftar Pegawai</a></li>
            </ul>
          </div>
         </div>
      </div>
    </div>
@endsection
