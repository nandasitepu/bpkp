@extends('main')
@section('title')
  Daftar Tugas 2017
@endsection

@section('stylesheets')

    {{-- dataTables --}}
    <link href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

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
           <div class="row">
            <div class="col-md-9">
              <div class="text-center" style="margin:10px; font-size:20px">
                <b>Daftar Penugasan BPKP Perwakilan Provinsi Sulawesi Barat</b>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="btn-group-sm text-center" style="margin:10px">
                <a href="{{route('tugas.create')}}" class="btn btn-default btn-sm ">Tambah Data</a> 
                <button onclick="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myExport">Export</button> 
                <button onclick="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myImport">Import</button>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <table border="0" cellspacing="5" cellpadding="5" class="well" style="padding:10px; width:100%">
              <tbody >
                Range Data:
                <div >
                    <tr >  
                        <td>Tanggal Mulai:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Tanggal Selesai:</td>
                        <td><input type="text" id="max" name="max"></td>
                    </tr>
                </div>
              </tbody>
          </table>
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
                  <a href="{{route('tugas.excel')}}" class="btn btn-success btn-sm">Export as Excel</a>
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

    {{-- dataTables --}}
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
    {{-- Validator --}}
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('assets/bootstrap/js/ie10-viewport-bug-workaround.js') }}"></script>  
    <script>
       $("#datepicker_from").datepicker({
          showOn: "button",
          buttonImage: "images/calendar.gif",
          buttonImageOnly: false,
          "onSelect": function(date) {
            minDateFilter = new Date(date).getTime();
            oTable.fnDraw();
          }
        }).keyup(function() {
          minDateFilter = new Date(this.value).getTime();
          oTable.fnDraw();
        });

        $("#datepicker_to").datepicker({
          showOn: "button",
          buttonImage: "images/calendar.gif",
          buttonImageOnly: false,
          "onSelect": function(date) {
            maxDateFilter = new Date(date).getTime();
            oTable.fnDraw();
          }
        }).keyup(function() {
          maxDateFilter = new Date(this.value).getTime();
          oTable.fnDraw();
        });
      //

      $(document).ready(function() {
        var table = $('#tugas').removeAttr('width').DataTable({ 
        dom:'<"btn btn-default"B><"well"<l>f>    tp',
        buttons: [
            {
                text: 'cs',
                className: 'red'
            },
            {
                text: 'Orange',
                className: 'orange'
            },
            {
                text: 'Green',
                className: 'green'
            }
        ],
        processing: true,
        serverSide: true,
        ajax: '{{route('table.tugas')}}',
        columns: [
          {data: 'id', name: 'id'},
          {data: 'no_st_nd', name: 'no_st_nd'},

          {data: 'tanggal_st_nd', name: 'tanggal_st_nd'},
          {data: 'uraian', name: 'uraian'},
          {data: 'no_laporan', name: 'no_laporan'},
         
          {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
     
        order: [ [0, 'desc'] ],
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
          // Add event listeners to the two range filtering inputs
           $('#min').keyup( function() { table.draw(); } );
           $('#max').keyup( function() { table.draw(); } )
      } );
      
     


      function editData(id) {
        $ajax({
          url:"{{url('tugas')}}" + id + "/edit",
          type: "GET",
          dataType: "JSON",
          
        })
      }

    </script>

    <script src="{{asset("swal/dist/sweetalert.min.js")}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset("swal/dist/sweetalert.css")}}">
    @include('sweet::alert')
@endsection
