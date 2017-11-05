@extends('main')
@section('title')
  Daftar Pegawai BPKP
@endsection

@section('stylesheets')
  {{-- dataTables --}}
  <link href="{{ asset('assets/datatables/css/dataTables.uikit.min.css') }}" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="{{ asset('assets/bootstrap/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

  <style>

      .table thead, .table th {text-align: center;}
      .modal {
          position: absolute;
          top: 50px;
          bottom: 0;
          left: 0;
          z-index: 10040;
          overflow: auto;
          overflow-y: auto;
        }
  </style>
 @endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading" style="background:grey; color:#fff">
          <div class="row">
            <div class="col-md-9">
              <div class="text-center" style="margin:10px"><b>Daftar Pegawai BPKP Perwakilan Provinsi Sulawesi Barat</b></div>
            </div>
            
            <div class="col-md-3">
              <div class="btn-group-sm text-center" style="margin:10px">
                <a href ="{{route('pegawai.create')}}"> <button class="btn btn-default btn-sm ">Tambah Data</button> </a>
                <button onclick="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myExport">Export</button> 
                <button onclick="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myImport">Import</button>
              </div>
            </div>
          </div>

        </div>
        <div class="panel-body">
             <div class="panel-body table-responsive">
                <table id="pegawai" class="table compact cell-border" style="width:100%">
                    <thead>
                      <tr>
                        <th width="30">No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jabatan</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody >
                    
                    </tbody>
                  </table>
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
      
                <p><b>Export Pegawai:</b></p>
                <br>
                <div> 
                  <a href="{{route('pegawai.excel')}}" class="btn btn-success btn-sm">Export as Excel</a>
                  <a href="" class="btn btn-warning btn-sm">Export as PDF</a>
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
        <form method="post" action="{{route('pegawai.import')}}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
    {{-- dataTables --}}
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
    {{-- Validator --}}
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('assets/bootstrap/js/ie10-viewport-bug-workaround.js') }}"></script>  

    <script>
      oTable = $('#pegawai').DataTable({ 
        processing: true,
        serverSide: true,
        ajax: '/api/pegawai/table',
        columns: [
          {data: 'id', name: 'id'},
          {data: 'nama', name: 'nama'},
          {data: 'nip', name: 'nip'},
          {data: 'jabatan', name: 'jabatan'},
          {data: 'action', name: 'action'},
        ],

        "language": {
                "sProcessing":   "Proses ...",
                "sLengthMenu":   "Tampilkan _MENU_ Data",
                "sZeroRecords":  "Data Tidak Ada",
                "sInfo":         "Tampilkan  _START_ sampai _END_ dari _TOTAL_ Data",
                "sInfoEmpty":    "Tampilkan 0 hingga 0 dari 0 Data",
                "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                "sInfoPostFix":  "",
                "sSearch":       "Cari:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Pertama",
                    "sPrevious": "<",
                    "sNext":     ">",
                    "sLast":     "Terakhir"
                }
        } 
      });
     </script>
 @endsection
