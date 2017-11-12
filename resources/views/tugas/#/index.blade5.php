@extends('main')
@section('title')
  Daftar Tugas 2017
@endsection
@section('top_scripts')
    <link href="{{ asset('assets/select2/css/select2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Pilih Nama",
            });
            
        });
     </script>
@endsection
@section('stylesheets')
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('assets/bootstrap/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <style>
     

      .table thead, .table th{text-align: center;}
      .modal {
          position: absolute;
          top: 50px;
          bottom: 0;
          left: 0;
          z-index: 10040;
          overflow: auto;
          overflow-y: auto;
        }
      table {
          table-layout: fixed;
          word-wrap: break-word;
      }
      tbody tr td:nth-child(1) {
       text-align: center;
      }

      tbody tr td:nth-child(2) {
       text-align: center;
      }

      tbody tr td:nth-child(5) {
       text-align: center;
      }

       tbody tr td:nth-child(6) {
       text-align: center;
       
      }
     
    </style>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
           <div class="row" style="background:#0375b4;color:#fff">
            <div class="col-md-9">
              <div class="text-center" style="margin:10px; font-size:20px">
                <b>Daftar Surat Tugas (ST) Tahun 2017</b>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="btn-group-sm text-center" style="margin:10px; ">
                <a href="{{route('tugas.create')}}" class="btn btn-default btn-sm ">Tambah Data</a> 
                <button onclick="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myExport">Export</button> 
                <button onclick="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myImport">Import</button>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row" >
            <div class="col-md-4">
              <form action="{{route('tugas.filter')}}" method="GET" class="form-inline">
                  <label for="pegawai_id" class="col-form-label">Nama Pegawai:</label><br>
                  <div class="input-group" style="width:100%">
                    <select class="form-control select2 input-sm" name="pegawai_id" style="width:95%" >
                        @foreach ($pegawai as $kt )
                           <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                        @endforeach
                    </select>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-sm">Cari&nbsp;<i class="fa fa-check-circle fa-fw"></i></button> 
                    </span>
                  </div>
              </form>
            
                
            </div>
            <div class="col-md-5">
                <form action="{{route('tugas.filter')}}" method="GET" class="form-inline">
                  <label for="penanggung_jawab_id" class="col-form-label">Range Tanggal ST:</label><br>
                  <input type="date" id="s_tgl_awal"  name="s_tgl_awal" class="form-control input-sm" required>
                  <input type="date" id="s_tgl_akhir" name="s_tgl_akhir" class="form-control input-sm" required>
                  <button type="submit" class="btn btn-success btn-sm">Cari&nbsp;<i class="fa fa-check fa-fw"></i></button>
                </form>
            </div>
             <div class="col-md-3">
              <form action="{{route('tugas.filter')}}" method="GET" class="form-inline">
                  <label for="pegawai_id" class="col-form-label">Status Laporan:</label><br>
                  <div class="input-group" style="width:100%">
                    <select class="form-control input-sm" name="pegawai_id" >
                    
                           <option value=""></option>
                      
                    </select>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-info btn-sm">Cari&nbsp;<i class="fa fa-check-circle fa-fw"></i></button> 
                    </span>
                  </div>
              </form>
            </div>
       
          </div>
          <hr>
         <div class="table table-responsive">
            <table id="tugas" class="table-condensed table-bordered visible-xs" width="400%">
                <thead>
                  <tr>
                    <th class="col-xs-1">No</th>
                    <th class="col-xs-2">ST/ND</th>
                    <th class="col-xs-1 ">Tanggal ST</th>
                    <th class="col-xs-4" >Uraian</th>
                    <th class="col-xs-1">Laporan</th>
                    <th class="col-xs-1">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tugas as $tgs)
                  <tr>
                    <td>{{$tgs->id}}</td>
                    <td>{{$tgs->no_st_nd}}</td>
                    <td class="text-center">{{$tgs->tanggal_st_nd}}</td>
                    <td>{{$tgs->uraian}}</td>
                    <td>{{$tgs->no_laporan}}</td>
                    <td> 
                      <button class="btn btn-default btn-xs">View</button>
                      <button class="btn btn-default btn-xs">Edit</button>
                      <button class="btn btn-default btn-xs">Delete</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
             </table>
            <table id="tugas" class="table-condensed table-bordered hidden-xs" width="100%">
                  <colgroup class="hidden-xs">
                    <col class="col-xs-1">
                    <col class="col-xs-2">
                    <col class="col-xs-1">
                    <col class="col-xs-3">
                    <col class="col-xs-2">
                    <col class="col-xs-3">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ST/ND</th>
                      <th>Tanggal ST</th>
                      <th>Uraian</th>
                      <th>Laporan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tugas as $tgs)
                    <tr>
                      <td style="vertical-align:top">{{$tgs->id}}</td>
                      <td style="vertical-align:top">{{$tgs->no_st_nd}}</td>
                      <td style="vertical-align:top" class="text-center">{{$tgs->tanggal_st_nd}}</td>
                      <td>{{$tgs->uraian}}</td>
                      <td>{{$tgs->no_laporan === null ? "Proses" : $tgs->no_laporan}}</td>
                      <td>
                       <a href="{{route('tugas.show', $tgs->id)}}"> 
                          <button class="btn btn-primary btn-xs">Detail&nbsp;<i class="fa fa-eye fa-fw"></i></button>
                       </a>
                       <a href="{{route('tugas.edit', $tgs->id)}}"> 
                          <button class="btn btn-success btn-xs">Ubah&nbsp;<i class="fa fa-edit fa-fw"></i></button>
                       </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
             </table>
           <div class="text-center" > {{ $tugas->links() }}</div >
          </div>
        </div>
        
      </div>
    </div>
    
  </div>
  {{-- MODAL Export --}}
  <div id="myExport" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content Export-->
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Export Data</h4>
          </div>
          <div class="modal-body">
              <p><b>Export Tugas:</b></p>
              <div class="row">
                  <div class="col-md-4">
                      <label for="tgl_mulai" class="col-form-label">Mulai</label>
                      <input name="tgl_mulai" class="form-control" type="date" id="tgl_mulai">
                  </div>
                  <div class="col-md-4">
                      <label for="tgl_selesai" class="col-form-label">Selesai</label>
                      <input name="tgl_selesai" class="form-control" type="date" placeholder="01/01/2017" id="tgl_selesai"> 
                  </div>
                  <div class="col-md-4">
                    <br>
                    <a href="" class="btn btn-primary btn-xs">Export Excel</a>
                  </div>
              </div>
                <br>
                <div>
                  Export All:
                  <a href="{{route('tugas.excel')}}" class="btn btn-success btn-sm">Excel</a>
                  <a href="" class="btn btn-warning btn-sm">PDF</a>
                </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
   </div>

  <div id="myImport" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content Import-->
      <div class="modal-content">
        <form method="post" action="{{route('tugas.import')}}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Import Data</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="file" class="col-md-3 control-label">Import Data</label>
              <div class="col-md-9"> 
                <input type="file" id="file" name="file" class="form-control" autofocus required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>

    </div>
   </div>
  <br>
@endsection

@section('bot_scripts')
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/ie10-viewport-bug-workaround.js') }}"></script> 
    <script src="{{asset('swal/dist/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('swal/dist/sweetalert.css')}}">
    @include('sweet::alert')
@endsection
