@extends('main')
@section('title')
FAQ
@endsection
@section('stylesheets')

@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4 class="text-center"><b>Frequently Asked Questions</b></h4>
            <hr>
            <strong class="text-success"><h4>Pertanyaan</h4></strong>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#1" aria-expanded="false" aria-controls="collapseExample">
              Situs Apa Ini ?
            </button>
            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#2" aria-expanded="false" aria-controls="collapseExample">
              Siapa yang Buat ?
            </button>
            <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#3" aria-expanded="false" aria-controls="collapseExample">
              Rame Ga ?
            </button>
            <div class="collapse" id="1">
              <div class="well">
                Situs BPKP Perwakilan Sulawesi Barat merupakan sarana penyediaan informasi bagi para pegawai dan <i>stakeholders</i> BPKP, khususnya di Wilayah Provinsi Sulawesi Barat.
              </div>
            </div>
            <div class="collapse" id="2">
              <div class="well">
              Situs ini dibuat secara pribadi oleh NS, seorang Pegawai Perwakilan BPKP Provinsi Sulawesi Barat. Data-data yang digunakan disajikan dengan itikad baik untuk publikasi Perwakilan BPKP Provinsi Sulawesi Barat dan sebagai penunjang pelaksanaan penugasan.
              </div>
            </div>
            <div class="collapse" id="3">
              <div class="well">
                Belum rame ki, ayo ramein ...
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
