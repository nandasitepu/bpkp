@extends('main')
@section('title')
  SPIP Kabupaten Mamuju
@endsection
@section('stylesheets')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h4>SPIP Kabupaten Mamuju</h4>
        <hr>
        <p>Level Maturitas Kabupaten {{$obrik->nama}} = 2.648</p>
        <p>Berikut Pemetaan Dokumen SPIP Pada Pemerintah Kabupaten Mamuju</p>
        <div class="table-responsive">
          <table class="table table-condensed table-striped">
            <thead>
              <tr>
                <td>No</td>
                <td>Sub Unsur SPIP</td>
                <td>Level</td>
                <td>Dokumen</td>
                <td>Catatan</td>
              </tr>
            </thead>
            <tbody>

          </table>
        </div>
        </div>
      <div class="col-md-2 text-center">
        <img src="{{asset('img/kab/mamuju.jpg')}}" alt="" height="100px" >
        <h5 class="label label-primary">Pemerintah Kabupaten Mamuju</h5>
      </div>
    </div>
  </div>
@endsection
