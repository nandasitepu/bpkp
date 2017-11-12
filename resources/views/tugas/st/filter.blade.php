@extends('main')
@section('stylesheets')
    <style>
        .table th 
        {
            text-align: center;   
        }
    </style>
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
@section('content')
    <div class="row">
    
        <div class="col-md-12">
            <div class="">
                <div class="panel-body">
                    <div class="row well" >
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
                   </div><!-- end of row -->
                    <hr>
                    <div class="table-responsive">
                        <colgroup>
                     
                        </colgroup>
                        <table class="table table-bordered">
                            <thead >
                                <tr>
                                    <th class="col-xs-1">No</th>
                                    <th class="col-xs-2">ST/ND</th>
                                    <th class="col-xs-1">Tanggal ST</th>
                                    <th class="col-xs-3" >Uraian</th>
                                    <th class="col-xs-2">Laporan</th>
                                    <th class="col-xs-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($st->count() === 0)
                                <tr>
                                    <td>Data Tidak Tersedia</td>
                                    <td>Data Tidak Tersedia</td>
                                    <td>Data Tidak Tersedia</td>
                                    <td class="text-center">Data Tidak Tersedia</td>
                                    <td class="text-center">Data Tidak Tersedia</td>
                                    <td class="text-center">Data Tidak Tersedia</td>
                                </tr>
                            @else
                                @foreach($st as $st)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{$st->no_st}}</td> 
                                    <td>{{$st->tanggal_st}}</td>   
                                    <td>{{$st->uraian}}</td>   
                                    <td>{{$st->laporan}}</td>
                                    <td class="text-center">
                                        <div class="btn-group-xs ">
                                            <a href="{{route('st.show', $st->id)}}" class="btn btn-primary"><i class="fa fa-eye fa-fw"></i>&nbsp;Show</a>
                                            <a href="{{route('st.edit', $st->id)}}" class="btn btn-info"><i class="fa fa-edit fa-fw"></i>&nbsp;Edit</a>
                                            <a href="{{route('st.cetak', $st->id)}}" class="btn btn-default"><i class="fa fa-print fa-fw"></i>&nbsp;Cetak</a>
                                        </div>
                                    </t>    
                                </tr>    
                                @endforeach  
                            @endif
                          
                                
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection