@extends('main')
@section('title')
  Show Tugas 
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4><b>{{$tugas->uraian}}</b></h4> <h3><span class="label label-default pull-right">{{$tugas->bidang}}</span></h3>
        </div>
        <br>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 hidden-xs" id="data-penugasan">
              <span class="col-md-5">
                <div class="col-md-6 btn btn-primary btn-sm active">{{$tugas->no_st_nd}}</div> 
                <div class="col-md-6 btn btn-primary btn-sm active">{{$tugas->tanggal_st_nd}}</div>   
               </span>
              <span class="col-md-5 " >
                <div class="col-md-6 btn btn-success btn-sm active">
                  @if($tugas->no_laporan === NULL)
                    LAP-XXX/PW32/X/20XX
                  @else  
                    {{$tugas->no_laporan}}
                  @endif
                </div>
                <div class="col-md-6 btn btn-success btn-sm active">
                    @if($tugas->tanggal_laporan === NULL)
                    XX-XX-XXXX
                    @else  
                      {{$tugas->tanggal_laporan}}
                    @endif
                </div>  
               </span>
              <span class="col-md-2 btn btn-default btn-sm active">
                <div>
                  <b>Status : 
                    @if($tugas->no_laporan === NULL)
                      PROSES
                    @else  
                      Sudah NETT
                    @endif
                  </b>
                  </div>
               </span>
             </div>
            {{--Visible XS --}}
            <div class="col-md-12 visible-xs" id="data-penugasan">
              <span class="col-md-5 btn btn-default btn-sm btn-block">
                <div class="text-primary col-md-6"> <b>{{$tugas->no_st_nd}}</b></div> 
                <div class="text-primary col-md-6"> <b>{{$tugas->tanggal_st_nd}}</b></div>   
              </span>
              <span class="col-md-5 btn btn-default btn-sm btn-block" >
                <div class="text-success col-md-6"> <b>{{$tugas->no_laporan}}</b></div>
                <div class="text-success col-md-6"> <b>{{$tugas->tanggal_laporan}}</b></div>  
              </span>
              <span class="col-md-2 btn btn-default btn-sm btn-block">
                <div> 
                  <b>Status Tindak Lanjut : 
                      @if($tugas->no_laporan === NULL)
                        PROSES
                      @else  
                        Sudah NETT
                      @endif
                  </b>
                </div>
              </span>
             </div>
          </div>
          <br>
    
          <div class="row">
              <div id="data-tim"> 
                <div class="col-md-5">
                  <h4><b>Data Tim</b></h4>
                  <hr>
                    <p> Pengendali Mutu : <br>{{$tugas->pengendaliMutu->nama}}</p>
                    <p> Pengendali Teknis : <br>{{$tugas->pengendaliTeknis->nama}}</p>
                    <p> Ketua Tim : <br>{{$tugas->ketuaTim->nama}}</p>
                    <p> Anggota Tim : 
                        @foreach($tugas->anggotaTim as $at)
                          <li>{{$at->nama}}</li>
                        @endforeach
                    </p>
                </div>
              </div>
        
              <div id="file-tugas" style="padding:20px">
                <div class="col-md-7 text-center" style="border: 1px solid #000; padding:20px ">
                    <div class="col-md-12">
                      <h5><b><u>Status:</u></b> </h5>
                      <button class="label label-default">PROSES</button>
                      <hr>
                    </div>
                    <div class="col-md-4">
                      <h5><b><u>S/ST/ND:</u></b> </h5>
                      <button class="btn btn-default fa fa-file-pdf-o fa-3x"></button>
                    </div >
                    <div class="col-md-4">
                      <h5><b><u>Kendali Mutu:</u></b> </h5>
                      <button class="btn btn-warning fa fa-file-pdf-o fa-3x"></button>
                    </div >
                     <div class="col-md-4">
                      <h5><b><u>Laporan:</u></b> </h5>
                      <button class="btn btn-primary fa fa-file-pdf-o fa-3x"></button>
                    </div >
                </div>
              </div>
          </div>

     
          <div class="row">
              <div id="ringkasan penugasan"> 
                <div class="col-md-5">
                  <h4><b>Ringkasan</b></h4>
                  <hr>
                    <p><b><span class="text-danger">Temuan:</span> </b></p>
                    <p><b><span class="text-success">Rekomendasi:</span></b></p>
                   
                </div>
              </div>
        
              <div id="file-tugas" style="padding:20px">
                 <b> <b>Catatan:</b> </p>
                <div class="col-md-7" style="border: 1px solid #000; padding:50px">
                    
                </div>
              </div>
          </div>
        </div>
      </div>
   
    </div>
  </div>
@endsection