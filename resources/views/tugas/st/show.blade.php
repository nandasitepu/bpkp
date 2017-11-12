@extends('main')
@section('title')
  Show Tugas 
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        
        <div class="panel-heading">
           <div class="row">
              <div class="col-md-4" style="background:#328cc1;color:#fff">
                <b>URAIAN PENUGASAN:</b>
                <h5>
                  <a href="{{route('st.edit', $st->id) }}" class="label label-default"><i class="fa fa-edit fa-lg"></i>&nbsp; ST</a> &nbsp;
                  <a href="{{route('st.edit', $st->id) }}" class="label label-danger"><i class="fa fa-edit fa-lg"></i>&nbsp; Laporan</a> &nbsp;
                </h4>
              </div>

              <div class="col-md-5 col-md-offset-1" style="border: 1px solid #ccc; padding:5px">
                <b>{{$st->uraian}}</b><br>
              </div>
          
             <div class="col-md-2">
                <h3 class="text-right">
                  <span class="label label-default">{{$st->bidang}}</span>
                </h3>
             </div>
           </div>
            
        </div>
      
        <br>
        <div class="panel-body">
          <div class="row">
            <div class="hidden-xs" id="data-penugasan">
              <span class="col-md-5">
                <div class="col-md-6 btn btn-primary btn-sm active">{{$st->no_st}}</div> 
                <div class="col-md-6 btn btn-primary btn-sm active">{{$st->tanggal_st  === NULL ? "Belum ada tanggal" : $st->tanggal_st }}</div>   
               </span>
              <span class="col-md-5 " >
                <div class="col-md-6 btn btn-success btn-sm active">
                  @if($st->no_laporan === NULL)
                    LAP-XXX/PW32/X/20XX
                  @else  
                    {{$st->no_laporan}}
                  @endif
                </div>
                <div class="col-md-6 btn btn-success btn-sm active">
                    @if($st->tanggal_laporan === NULL)
                    XX-XX-XXXX
                    @else  
                      {{$st->tanggal_laporan}}
                    @endif
                </div>  
               </span>
              <span class="col-md-2 ">
                <div class="btn btn-default btn-sm active">
                  <b>Status : 
                    @if($st->no_laporan === NULL)
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
                <div class="text-primary col-md-6"> <b>{{$st->no_st}}</b></div> 
                <div class="text-primary col-md-6"> <b>{{$st->tanggal_st}}</b></div>   
              </span>
              <span class="col-md-5 btn btn-default btn-sm btn-block" >
                <div class="text-success col-md-6"> <b>{{$st->no_laporan}}</b></div>
                <div class="text-success col-md-6"> <b>{{$st->tanggal_laporan}}</b></div>  
              </span>
              <span class="col-md-2 btn btn-default btn-sm btn-block">
                <div> 
                  <b>Status Tindak Lanjut : 
                      @if($st->no_laporan === NULL)
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
                    <p> Pengendali Mutu : <br>{{ $st->pengendali_mutu_id === null ? "Tidak Ada" : $st->pengendaliMutu->nama }}</p>
                    <p> Pengendali Teknis : <br>{{ $st->pengendali_teknis_id === null ? "Tidak Ada" : $st->pengendaliTeknis->nama }}</p>
                    <p> Ketua Tim : <br>{{ $st->ketua_tim_id === null ? "Tidak Ada" : $st->ketuaTim->nama }}</p>
                    <p> Anggota Tim : 
                        @foreach($st->anggotaTim as $at)
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
                 <b> <b>Catatan:</b> </div>
                <div class="col-md-7" style="border: 1px solid #000; padding:50px">
                      
                </div>
              </div>
          </div>
        </div>
      </div>
   
    </div>
  </div>
@endsection