@extends('main')
@section('stylesheets')
    <style>
        /*
        * Row with equal height columns
        * --------------------------------------------------
        */
        .row-eq-height 
            {
            display: -webkit-box;
            }
    </style>
@endsection
@section('title')
    Pembuatan ST
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
    <div class="row" class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
             <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    <div class="row"> 
        <div class="col-md-12">
         
            <div class="panel panel-default">
               
                <div class="panel-heading" style="background:#328cc1;color:#fff">
                    <h4 class="text-center"><b> Buat Surat Tugas </b></h4>
                     
                </div>
               
                <div class="panel-body">
                    <form method="POST" action="{{route('tugas.store')}}" class="form-horizontal" id="form">
                     {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-4" style="  padding:15px">
                                <label for="no_st" class="col-form-label">Nomor ST :</label>
                                <input name="no_st" class="form-control" type="text" value="{!! old('no_st') !!}" placeholder="ST-XXX/PW32/X/2017" id="no_st">
                       
                                <label for="tujuan_st" class="col-form-label">Tujuan ST</label>
                                <input name="tujuan_st" class="form-control" type="text" value="{!! old('tujuan_st') !!}" placeholder="Bupati/Kepala Dinas XYZ" id="tujuan_st">
                      
                                <label for="tipe" class="col-form-label">Tipe :</label>
                                <input name="tipe" class="form-control" type="text" value="{!! old('tipe') !!}" placeholder="Assurance:.../Consulting:... " id="tipe">
                        
                                <label for="bidang" class="col-form-label">Bidang :</label>
                                <input name="bidang" class="form-control" type="text"  value="{!! old('bidang') !!}" placeholder="IPP/APD/dll" id="bidang">
                            </div>
    
                          <div class="col-md-8" style="background:#77c9d4; color:white; padding:15px">
                              
                                  
                            
                                  <label for="uraian" class="col-form-label">Nama/Uraian Penugasan</label>
                                  <textarea name="uraian" class="form-control" rows="4" type="text-area" value="{!! old('uraian') !!}" placeholder="Audit/Evaluasi/Bimtek bla bla bla..." id="uraian"></textarea>
                                 
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="tanggal_st" class="col-form-label">Tanggal ST</label>
                                        <input name="tanggal_st" class="form-control" type="date" value="{!! old('tanggal_st') !!}" placeholder="01/01/2017" id="tanggal_st">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="tanggal-mulai" class="col-form-label">Tanggal Mulai</label>
                                        <input name="tanggal_mulai" class="form-control" type="date" value="{!! old('tanggal_mulai') !!}" placeholder="01/01/2017" id="tanggal_mulai">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="tanggal_selesai" class="col-form-label">Tanggal Selesai</label>
                                        <input name="tanggal_selesai" class="form-control" type="date" value="{!! old('tanggal_selesai') !!}" placeholder="01/01/2017" id="tanggal_selesai"> 
                                    </div>
                                    <div class="col-md-3">
                                        <label for="hp" class="col-form-label">Total HP</label>
                                        <input name="hp" class="form-control" type="text" value="{!! old('hp') !!}" placeholder="Hari Penugasan" id="hp">
                                    </div>
                                
                                </div>
                                <br>
                            
                            </div>
                        
                            
                        </div>
                        <hr>
                        <div class="row" id="data-tim">
                            <div class="col-md-4" style="background:#8eaebd; color:white; padding:15px">
                                <label for="penanggung_jawab_id" class="col-form-label">Kepala Perwakilan/Plh</label>
                                <div>
                                    <select class="form-control select2" name="penanggung_jawab_id" style="width:100%">
                                        @foreach ($pj as $kaper )
                                            <option value="{{ $kaper->id }}">{{ $kaper->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <label for="pengendali_mutu_id" class="col-form-label">Pengendali Mutu</label>
                                <div>
                                    <select class="form-control select2" name="pengendali_mutu_id" style="width:100%">
                                        @foreach ($daltu as $dtu )
                                            <option value="{{ $dtu->id }}">{{ $dtu->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                 <br>
                                <label for="pengendali_teknis_id" class="col-form-label">Pengendali Teknis</label>
                                <div>
                                    <select class="form-control select2" name="pengendali_teknis_id" style="width:100%">
                                        @foreach ($dalnis as $dts )
                                            <option value="{{ $dts->id }}">{{ $dts->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <label for="ketua_tim_id" class="col-form-label">Ketua Tim</label>
                                 <div>
                                     <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                        @foreach ($pegawai as $kt )
                                            <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                            
                         <div class="col-md-4" style="background:#ec576b; color:white; padding:15px">
                                <label for="anggota_tim" class="col-form-label">Anggota Tim</label>
                                <div>
                                    <select class="form-control select2" name="anggotaTim[]" multiple="multiple" style="width:100%">
                                        @foreach ($pegawai as $at )
                                            <option value="{{ $at->id }}">{{ $at->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <label for="narasumber" class="col-form-label">Narasumber</label>
                                <div>
                                    <select class="form-control select2" name="narasumber[]" multiple="multiple" style="width:100%">
                                        @foreach ($pegawai as $at )
                                            <option value="{{ $at->id }}">{{ $at->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <label for="fasilitator" class="col-form-label">Fasilitator</label>
                                <div>
                                    <select class="form-control select2" name="fasilitator[]" multiple="multiple" style="width:100%">
                                        @foreach ($pegawai as $at )
                                            <option value="{{ $at->id }}">{{ $at->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-fw fa-money"></i></span>
                                    <a href="km"><div class="btn btn-md btn-default btn-block"><b>Tambah KM</b></div></a>
                                    <input id="km" type="text" class="form-control" name="km_id" placeholder="No KM" disabled>
                                </div>
                               
                         
                           </div>
                           <div class="col-md-4" style="background:#4ABDAC; color:white; padding:15px">
                                <label for="lokasi" class="col-form-label">Lokasi</label>
                                <input name="lokasi" class="form-control" type="text" value="{!! old('lokasi') !!}" placeholder="Mamuju/Majene/..." id="lokasi">
                                <br>
                                <b>Biaya:  &nbsp; &nbsp;</b>
                                <input name="biaya" class="form-control" type="text" value="{!! old('biaya') !!}" placeholder="Tidak Ada/BPKP/Pemda ABC/..." id="biaya">
                                <br>
                                <label for="rencana_biaya" class="col-form-label">Total Rencana Biaya</label>
                               
                                 <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-fw fa-money"></i></span>
                                    <a href="costsheet"><div class="btn btn-md btn-default btn-block"><b>Tambah CostSheet</b></div></a>
                                    <input id="costsheet" type="text" class="form-control" name="costsheet_id" placeholder="No CostSheet" disabled>
                                </div>
                           </div>
                           
                        </div>
                       
                </div>
                <div class="panel-footer">
                    <div class="text-right">
                        <a href="{{route('tugas.index')}}" class="btn btn-default">Kembali</a> &nbsp; &nbsp;
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div> 
                </div>
                </form>
            </div>
        
        </div>
    </div>

  
 @endsection
@section('bot_scripts')
    <link   href="{{  asset('assets/parsley/parsley.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/parsley/parsley.min.js') }}"></script>
    <script>
        $('#form').parsley();
    </script>
@endsection