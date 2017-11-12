@extends ('main')
@section('title')
  Daftar Kendali Mutu
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
       <div class="row" style="background:#f53240;color:#fff">
            <div class="col-md-7">
              <div class="text-center" style="margin:10px; font-size:20px">
                <b>Daftar Kendali Mutu (KM)</b>
              </div>
            </div>
            
            <div class="col-md-5">
              <div class="btn-group-sm text-center" style="margin:10px; ">
                <a href="{{route('km.new')}}" class="btn btn-default btn-sm "><b>KM</b> &nbsp; <i class="fa fa-fw fa-plus-circle"></i></a> 
                <span class="btn btn-default btn-xs"></span>
                <a href="{{route('st.index')}}" class="btn btn-default btn-sm "><b>ST</b> &nbsp; <i class="fa fa-fw fa-briefcase"></i></a>
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
                    <label for="penanggung_jawab_id" class="col-form-label">Range Tanggal KM:</label><br>
                    <input type="date" id="s_tgl_awal"  name="s_tgl_awal" class="form-control input-sm" required>
                    <input type="date" id="s_tgl_akhir" name="s_tgl_akhir" class="form-control input-sm" required>
                    <button type="submit" class="btn btn-success btn-sm">Cari&nbsp;<i class="fa fa-check fa-fw"></i></button>
                  </form>
              </div>
              <div class="col-md-3">
              
              </div>
       
          </div>
          <hr>
         
          <div class="table-responsive"> 
           <table id="km" class="table table-condensed table-responsive" style="width:100%">
              <colgroup class="hidden-xs">
                <col class="col-xs-1">
                <col class="col-xs-2">
                <col class="col-xs-1">
                <col class="col-xs-2">
                <col class="col-xs-1">
                <col class="col-xs-2">
            
              </colgroup>
              <thead class="text-center">
                <tr>
                  <th>No</th>
                  <th>ST</th>
                  <th>Tanggal</th>
                  <th>KM</th>
                  <th>Ketua Tim</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>{{--Data Table--}}</tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
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
        var table = $('#km').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route('datatable.km')}}',
            columns: [
              {data: 'id', name: 'id'},
              {data: 'st.no_st', name: 'st'},
              {data: 'st.tanggal_st', name: 'km'},    
              {data: 'no_km', name: 'km'},
              {data: 'kt.nama', name: 'kt'},
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