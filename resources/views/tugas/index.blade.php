@extends('main')
@section('title')
  Daftar Tugas 2017
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
           <div class="row" style="background:blue;color:#fff">
            <div class="col-md-9">
              <div class="text-center" style="margin:10px; font-size:20px">
                <b>Daftar Penugasan BPKP Perwakilan Provinsi Sulawesi Barat</b>
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
            <div class="text-center well">
                <form action="{{route('tugas.filter')}}" method="GET" class="form-inline">
                  <input type="date" id="s_tgl_awal" name="s_tgl_awal" class="form-control" required>
                  <input type="date" id="s_tgl_akhir" name="s_tgl_akhir" class="form-control" required>
                  <button type="submit" class="btn btn-warning">Filter&nbsp;<i class="fa fa-filter fa-fw"></i></button>
                </form>
           </div>
          </div>
          <hr>
          <div class="table-responsive"> 
             <table id="tugas" class="table table-responsive" style="width:100%">
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
                <tbody>{{--Data Table--}}</tbody>
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
    <link href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
      // -----------------------------
      $.fn.dataTable.ext.search.push(
          function( settings, data, dataIndex ) {
              var min = parseInt( $('#min').val(), 10 );
              var max = parseInt( $('#max').val(), 10 );
              var age = parseFloat( data[0] ) || 0; // use data for the age column
      
              if ( ( isNaN( min ) && isNaN( max ) ) ||
                  ( isNaN( min ) && age <= max ) ||
                  ( min <= age   && isNaN( max ) ) ||
                  ( min <= age   && age <= max ) )
              {
                  return true;
              }
              return false;
          }
      );
      //
    
      //
      $(document).ready(function () {       
        ////---------------------- Initiate Data Table
       var table = $('#tugas').DataTable({
              processing: true,
              serverSide: true,
              ajax: {
                url:"{{route('table.tugas')}}"
              },
              columns: [
                {data: 'id', name: 'id'},
                {data: 'no_st_nd', name: 'no_st_nd'},
                {data: 'tanggal_st_nd', name: 'tanggal_st_nd'},
                {data: 'uraian', name: 'uraian'},
                {data: 'no_laporan', name: 'no_laporan'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
              ],
              order: [ [0] ],
              columnDefs: [
                    {"className": "dt-center", "targets": "_all"}
              ],
              language: {
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
              },
          });
       
        // -------------------- Add event listeners to the two range filtering inputs
       
        $('#min, #max').keyup( function() {
            table.draw();
        } );

     
      

      });

     </script>

    <script src="{{asset('swal/dist/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('swal/dist/sweetalert.css')}}">
    @include('sweet::alert')
@endsection
