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
       <div class="row" style="background:#0375b4;color:#fff">
            <div class="col-md-7">
              <div class="text-center" style="margin:10px; font-size:20px">
                <b>Daftar Surat Tugas (ST) Tahun 2017</b>
              </div>
            </div>
            
            <div class="col-md-5">
              <div class="btn-group-sm text-center" style="margin:10px; ">
                <a href="{{route('st.new')}}" class="btn btn-default btn-sm "><b>ST</b> &nbsp; <i class="fa fa-fw fa-file-o"></i></a>
                <a href="{{route('st.new')}}" class="btn btn-default btn-sm "><b>KM</b> &nbsp; <i class="fa fa-fw fa-file-archive-o"></i></a> 
                <a href="{{route('st.new')}}" class="btn btn-default btn-sm "><b>CostSheet</b> &nbsp; <i class="fa fa-fw fa-money"></i></a> 
                <button onclick="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myExport">Export</button> 
                <button onclick="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myImport">Import</button>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row" >
              <div class="col-md-4">
                <form action="{{route('st.filter')}}" method="GET" class="form-inline">
                    {{--Filter By Pegawai --}}
                    <label for="pegawai_id" class="col-form-label">Nama Pegawai PFA:</label><br>
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
                  <form action="{{route('st.filter')}}" method="GET" class="form-inline">
                    {{--Filter Tanggal ST --}}
                    <label for="penanggung_jawab_id" class="col-form-label">Range Tanggal ST:</label><br>
                    <input type="date" id="s_tgl_awal"  name="s_tgl_awal" class="form-control input-sm" required>
                    <input type="date" id="s_tgl_akhir" name="s_tgl_akhir" class="form-control input-sm" required>
                    <button type="submit" class="btn btn-success btn-sm">Cari&nbsp;<i class="fa fa-check fa-fw"></i></button>
                  </form>
              </div>
              <div class="col-md-3">
                <form action="{{route('st.filter')}}" method="GET" class="form-inline">
                    <label for="pegawai_id" class="col-form-label">Status Laporan:</label><br>
                    <div class="input-group" style="width:100%">
                      <select class="form-control input-sm" name="pegawai_id" style="width:95%" >
                      
                      <option value="1">Final</option>
                      <option value="2">Proses</option>
                      <option value="3">Gagal</option>
                        
                      </select>
                      <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-sm">Cari&nbsp;<i class="fa fa-check-circle fa-fw"></i></button> 
                      </span>
                    </div>
                </form>
              </div>
       
          </div>
          <hr>
         
          <div class="table-responsive"> 
           <table id="tugas" class="table table-condensed table-responsive" style="width:100%">
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
                  <th>ST</th>
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
                  <div class="col-md-6">
                      <label for="fromdate" class="col-form-label">Mulai</label>
                      <input name="fromdate" class="form-control" type="date" placeholder="01/01/2017" id="tanggal_mulai">
                  </div>
                  <div class="col-md-6">
                      <label for="todate" class="col-form-label">Selesai</label>
                      <input name="todate" class="form-control" type="date" placeholder="01/01/2017" id="tanggal_selesai"> 
                  </div>
              </div>
                <br>
                <div> 
                  <a href="{{route('st.export.excel')}}" class="btn btn-success btn-sm">Export as Excel</a>
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
        <form method="post" action="{{route('st.import.excel')}}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
 
    <link href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
    {{-- Validator --}}
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('assets/bootstrap/js/ie10-viewport-bug-workaround.js') }}"></script>  
    <script>
     /* Custom filtering function which will search data in column four between two values */
       $.fn.dataTable.ext.search.push(
          function (settings, data, dataIndex) {
              var min   = parseDateValue($('#min').val());
              var max   = parseDateValue($('#max').val());
              var date  = parseDateValue( data[2] ) || 0; 

              if ( ( isNaN( min ) && isNaN( max ) ) ||
                 ( isNaN( min ) && date <= max ) ||
                 ( min <= date   && isNaN( max ) ) ||
                 ( min <= date   && date <= max ) )
              {
                  return true;
              }
              return false;
          }
        );
        
      $(document).ready(function () { 
        
        // Initiate Data Table
        var table = $('#tugas').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route('datatable.st')}}',
            columns: [
              {data: 'id', name: 'id'},
              {data: 'no_st', name: 'no_st'},
              {data: 'tanggal_st', name: 'tanggal_st'},
              {data: 'uraian', name: 'uraian'},
              {data: 'no_laporan', name: 'no_laporan'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
        
            order: [ [0] ],
            // Options
            "columnDefs": [
                  {"className": "dt-center", "targets": "_all"}
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
            },
        });

        // Event listener to the two range filtering inputs to redraw on input
        $('#min, #max').change(function () {
            table.draw();
        });

        // Go To Edit Page
        function editData(id) {
          $ajax({
            url:"{{url('tugas')}}" + id + "/edit",
            type: "GET",
            dataType: "JSON",
          })

        
      }
      });
    </script>

    <script src="{{asset("swal/dist/sweetalert.min.js")}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset("swal/dist/sweetalert.css")}}">
    @include('sweet::alert')
@endsection
