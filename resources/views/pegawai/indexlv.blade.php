@extends('main')

@section('scripts')
  <script src="js/vue.js"></script>
  <script type="text/javascript" src="js/pegawai.js"></script>
@endsection


@section('contents')

  <div class="container">
    <div class="row">
      <div class="col-md-8"  >
        <div>
          
          <table class="table">
            <thead>
              <th>ID</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Pangkat</th>
              <th>Jabatan</th>
              <th>Keterangan</th>
              <th width="100px">Action</th>
            </thead>
            <tbody>
                @foreach ($pegawai as $p)
                  <tr >
                    <td> {{$p->id}} </td>
                    <td> {{$p->nama}}</td>
                    <td> {{$p->nip}} </td>
                    <td> {{$p->pangkat}} </td>
                    <td> {{$p->jabatan}} </td>
                    <td> {{$p->keterangan}} </td>
                    <td>
                        <span class="btn-group" role="group" aria-label="Basic example">
                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i></a>
                        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>  </a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  </a>
                        </span>
                    </td>

                  </tr>
                @endforeach
            </tbody>
          </table>
          <div>
            {!! $pegawai->links() !!}
          </div>
        </div>


      </div>
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading center F14">
            Menu
          </div>
          <div class="panel-body">
            <span class="btn-group" role="group" aria-label="Basic example">
              <a href="#" class="btn btn-default btn-xs">
                +  <a href="#" class="btn btn-primary btn-xs">Home</a>
              </a>
              <a href="#" class="btn btn-default btn-xs">
                +  <a href="#" class="btn btn-primary btn-xs">Pegawai</a>
              </a>
            </span>


          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
