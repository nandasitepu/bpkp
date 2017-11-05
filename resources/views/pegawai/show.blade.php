@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
            
                        <div class="col-md-2">
                            <h4 class="text-center"><span class="label label-primary">{{ucwords($pegawai->jabatan)}}</span></h4 >
                            <div class="text-center"><img class="img-thumbnail" src="{{asset('img/pegawai/all').'/'.$pegawai->foto}}" alt="" height="10px"></div>
                            <br>
                        </div>
                        <div class="col-md-10">
                            <div class="col-md-4">
                
                                <p><b>{{ucwords($pegawai->nama)}}</p>
                                <hr>
                                <p><b>NIP</b> <i class="fa fa-barcode fa-fw"></i>&nbsp; : <br></p>
                                <p><b>Pangkat/Golongan</b> <i class="fa fa-id-card-o fa-fw"></i>&nbsp; : <br></p>    
                                <p><b>e-mail</b> <i class="fa fa-envelope-o fa-fw"></i>&nbsp; : <br></p>
                                <p><b>Keterangan</b> <i class="fa fa-lightbulb-o fa-fw"></i>&nbsp;: <br></p>
                            </div>
                            <div class="col-md-8">
                                <p><b>Tempat/Tanggal Lahir <i class="fa fa-map-marker fa-fw"></i>&nbsp; : </b>  <br>
                                <hr>
                                <div class="col-md-6">
                                    <p><b>Riwayat Pekerjaan</b> <i class="fa fa-briefcase fa-fw"></i>&nbsp; : <br></p>
                                </div>
                                <div class="col-md-6">
                                    <p><b>Riwayat Pendidikan</b> <i class="fa fa-institution fa-fw"></i>&nbsp; : <br></p>                            
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>    
        </div>
     </div>
@endsection