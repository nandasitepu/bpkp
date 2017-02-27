@extends('main')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h3 class="text-center">
          Pemetaan SPIP Kabupaten X
        </h3>
        <div class="table-responsive">
          <table class="table table-condensed table-bordered">
            <thead>
              <tr class="info text-center">
                <td>No</td>
                <td>Sub Unsur</td>
                <td>Dokumen</td>
                <td>Check List</td>
                <td>Keterangan</td>
              </tr>
            </thead>
            <tbody>
              @foreach ($spip as $s)
                <tr>
                  <td>{{$s->id}}</td>
                  <td>Penegakan Integritas dan Etika</td>
                  <td>Kode Etik Pegawai Kabupaten</td>
                  <td>X</td>
                  <td>Belum Lengkap</td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
@endsection
