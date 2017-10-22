@extends('main')
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
    <div class="row"> 
        <div class="col-md-12">
         
            <div class="panel panel-default">
               
                <div class="panel-heading" style="background:blue;color:#fff">
                    <h4 class="text-center"><b> Buat Surat Tugas </b></h4>
                     
                </div>
               
                <div class="panel-body">
                    <form method="POST" action="{{route('tugas.store')}}" class="form-horizontal" >
                     {!! csrf_field() !!}
                       
                   
                        <div class="row">
                            <div class="col-md-4 well">
                                <label for="no_st_nd" class="col-form-label">Nomor ST/ND :</label>
                                <input name="no_st_nd" class="form-control" type="text" value="ST-XXX/PW32/X/2017" placeholder="ST-XXX/PW32/X/2017" id="no_st_nd">
                                <br>
                                <label for="tanggal_st_nd" class="col-form-label">Tanggal ST/ND</label>
                                <input name="tanggal_st_nd" class="form-control" type="date" placeholder="01/01/2017" id="tanggal_st_nd">
                                <br>
                                <label for="tipe" class="col-form-label">Tipe Penugasan :</label>
                                <input name="tipe" class="form-control" type="text" placeholder="Assurance:.../Consulting:... " id="tipe">
                                <br>
                                <label for="bidang" class="col-form-label">Bidang :</label>
                                <input name="bidang" class="form-control" type="text"  placeholder="IPP/APD/dll" id="bidang">
                            </div>
    
                            <div class="col-md-8">
                                <div class="well">
                                  <label for="uraian" class="col-form-label">Nama/Uraian Penugasan</label>
                                  <textarea name="uraian" class="form-control" rows="5" type="text-area" placeholder="Audit/Evaluasi/Bimtek bla bla bla..." id="uraian"></textarea>
                                 </div>
                              <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="tanggal-mulai" class="col-form-label">Tanggal Mulai</label>
                                        <input name="tanggal_mulai" class="form-control" type="date" placeholder="01/01/2017" id="tanggal_mulai">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="tanggal_selesai" class="col-form-label">Tanggal Selesai</label>
                                        <input name="tanggal_selesai" class="form-control" type="date" placeholder="01/01/2017" id="tanggal_selesai"> 
                                    </div>
                                    <div class="col-md-3">
                                        <label for="HP" class="col-form-label">Total HP</label>
                                        <input name="HP" class="form-control" type="text" placeholder="Hari Penugasan" id="tanggal_mulai">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="dl_pj" class="col-form-label">DL/Translok PJ</label>
                                         <input name="dl_pj" class="form-control" type="text" placeholder="Jumlah Hari" id="dl_pj">
                                    </div>
                                </div>
                                <br>
                               
                                <div class="row">
                                        <div class="col-md-3">
                                            <label for="dl_daltu" class="col-form-label">DL/Translok DALTU</label>
                                            <input name="dl_daltu" class="form-control" type="text" placeholder="Jumlah Hari" id="dl_daltu">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="dl_dalnis" class="col-form-label">DL/Translok DALNIS</label>
                                            <input name="dl_dalnis" class="form-control" type="text" placeholder="Jumlah Hari" id="dl_dalnis"> 
                                        </div>
                                        <div class="col-md-3">
                                            <label for="dl_kt" class="col-form-label">DL/Translok KT</label>
                                            <input name="dl_kt" class="form-control" type="text" placeholder="Jumlah Hari" id="dl_kt"> 
                                        </div>   
                                        <div class="col-md-3">
                                            <label for="dl_at_ft_ns" class="col-form-label">DL/Translok AT/FT/NS</label>
                                            <input name="dl_at_ft_ns" class="form-control" type="text" placeholder="Jumlah Hari" id="dl_at_ft_ns"> 
                                        </div> 
                                </div>     
                            </div>
                        
                            
                        </div>
                        <hr>
                        <div class="row" id="data-tim">
                            <div class="col-md-4 well">
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
                            
                           <div class="col-md-4">
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
                               
                         
                           </div>
                           <div class="col-md-4 well">
                                <label for="lokasi" class="col-form-label">Lokasi</label>
                                <input name="lokasi" class="form-control" type="text" placeholder="Mamuju/Majene/dll" id="lokasi">
                                <br>
                                <label for="beban" class="col-form-label">Beban</label>
                                <input name="beban" class="form-control" type="text" placeholder="BPKP/Pemda Mamuju/dll" id="beban">
                                <br>
                                <label for="rencana_biaya" class="col-form-label">Total Rencana Biaya</label>
                                <input name="rencana_biaya" class="form-control" type="text" placeholder="10000000" id="rencana_biaya">
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
