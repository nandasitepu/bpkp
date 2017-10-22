@extends('main')

@section('content')
    <div class="row">
    
        <div class="col-md-12">
            <div class="">
                <div class="panel-body">
                    <div class="row" >
                        <div class="text-center">
                            <form action="{{route('tugas.filter')}}" method="GET" class="form-inline">
                            <span class="field"><input type="date" id="s_tgl_awal" name="s_tgl_awal" class="form-control input-sm " required></span>
                            <span class="field"><input type="date" id="s_tgl_akhir" name="s_tgl_akhir" class="form-control input-sm field" required></span>
                            <span class="actions"> <button type="submit" class="btn btn-default btn-sm">Filter</button></span>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <colgroup class="hidden-xs">
                            <col class="col-xs-1">
                            <col class="col-xs-2">
                            <col class="col-xs-1">
                            <col class="col-xs-3">
                            <col class="col-xs-2">
                            <col class="col-xs-3">
                        </colgroup>
                        <table class="table table-bordered">
                        
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>ST/ND</th>
                                    <th>Tanggal ST</th>
                                    <th>Uraian</th>
                                    <th>Laporan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($tugas->count() === 0)
                                <tr>
                                    <td>Data Tidak Tersedia</td>
                                    <td>Data Tidak Tersedia</td>
                                    <td>Data Tidak Tersedia</td>
                                    <td>Data Tidak Tersedia</td>
                                    <td>Data Tidak Tersedia</td>
                                    <td>Data Tidak Tersedia</td>
                                </tr>
                            @else
                                @foreach($tugas as $tgs)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{$tgs->no_st_nd}}</td> 
                                    <td>{{$tgs->tanggal_st_nd}}</td>   
                                    <td>{{$tgs->uraian}}</td>   
                                    <td>{{$tgs->laporan}}</td>
                                    <td>{{$tgs->action}}</td>    
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