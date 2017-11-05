@extends('main')
@section('title')
    Pembuatan ST
@endsection
@section('top_scripts')
    <link href="{{ asset('assets/select2/css/select2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2-pj').select2().val({!! json_encode($tugas->penanggungJawab->id) !!}).trigger('change');
            $('.select2-daltu').select2().val({!! json_encode($tugas->pengendaliMutu->id) !!}).trigger('change');
            $('.select2-dalnis').select2().val({!! json_encode($tugas->pengendaliTeknis->id) !!}).trigger('change');
            $('.select2-kt').select2().val({!! json_encode($tugas->ketuaTim->id) !!}).trigger('change');
            //
            $('.select2-anggota-tim').select2().val({!! json_encode($tugas->anggotaTim()->allRelatedIds()) !!}).trigger('change');
            $('.select2-narasumber').select2().val({!! json_encode($tugas->narasumber()->allRelatedIds()) !!}).trigger('change');
            $('.select2-fasilitator').select2().val({!! json_encode($tugas->fasilitator()->allRelatedIds()) !!}).trigger('change');
        }); 
     </script>
@endsection
@section('content')
    <div class="row"> 
        <div class="col-md-12">
         
            <div class="panel panel-default">
               
                <div class="panel-heading">
                    <div class="text-center">
                      <b>
                        <span class="label label-default">Edit</span>&nbsp; ID: {{$tugas->id}}  
                        <p class="text-right"> <span >Surat Tugas : {{$tugas->no_st_nd}}</span></p>
                      </b>
                    </div>
                     
                 </div>
                <form action="{{route('tugas.update', $tugas->id) }}" class="form-horizontal" method="POST" >
                  <div class="panel-body"> 
                      {{ method_field('PUT')}}   
                      {{ csrf_field() }}
                      <div class="row">
                          <div class="col-md-4">
                              <label for="no_st_nd" class="col-form-label">Nomor ST/ND :</label>
                              <input name="no_st_nd" class="form-control" type="text" value="{{$tugas->no_st_nd}}" id="no_st_nd">
                              
                              <label for="tipe" class="col-form-label">Tipe Penugasan :</label>
                              <input name="tipe" class="form-control" type="text" value="{{$tugas->tipe}}" id="tipe">
                           
                              <label for="bidang" class="col-form-label">Bidang :</label>
                              <input name="bidang" class="form-control" type="text" value="{{$tugas->bidang}}" id="bidang">
                            </div>
                          <div class="col-md-8">
                              <label for="uraian" class="col-form-label">Nama/Uraian Penugasan</label>
                              <textarea name="uraian" class="form-control" type="text"  rows="3" id="uraian">{{$tugas->uraian}}</textarea>
                              <br>
                                <div class="col-md-3">
                                    <label for="tanggal_st_nd" class="col-form-label">Tanggal ST</label>
                                    <input name="tanggal_st_nd" class="form-control" type="date" value="{{$tugas->tanggal_st_nd}}" id="tanggal_st_nd">
                                </div>
                                <div class="col-md-3">
                                    <label for="tanggal_mulai" class="col-form-label">Tanggal Mulai</label>
                                    <input name="tanggal_mulai" class="form-control" type="date" value="{{$tugas->tanggal_mulai}}" id="tanggal_mulai">
                                </div>
                                <div class="col-md-3">
                                    <label for="tanggal_selesai" class="col-form-label">Tanggal Selesai</label>
                                    <input name="tanggal_selesai" class="form-control" type="date" value="{{$tugas->tanggal_selesai}}" id="tanggal_selesai"> 
                                </div>
                                <div class="col-md-3">
                                    <label for="total_hp" class="col-form-label">Hari Penugasan</label>
                                    <input name="total_hp" class="form-control" type="text" value="{{$tugas->total_hp}}" id="total_hp"> 
                                </div>      
                             </div>
                        
                      </div>
                      <hr>
                      <div class="row" id="data-tim">
                          <div class="col-md-4">
                              <label for="penanggung_jawab_id" class="col-form-label">Kepala Perwakilan/Plh: </label>
                              <div>
                                  <select class="form-control select2-pj" name="penanggung_jawab_id" selected="2" style="width:100%">
                                    @foreach ($pj as $kaper )
                                        <option value="{{ $kaper->id }}">{{ $kaper->nama }}</option>
                                    @endforeach
                                  </select>
                              </div>
                              <br>
                              <label for="pengendali_mutu_id" class="col-form-label">Pengendali Mutu</label>
                              <div>
                                  <select class="form-control select2-daltu" name="pengendali_mutu_id" style="width:100%">
                                      @foreach ($daltu as $dtu )
                                          <option value="{{ $dtu->id === NULL ? 1 : $dtu->id }}">{{ $dtu->nama }}</option>
                                      @endforeach
                                  </select>
                              </div>
                                <br>
                              <label for="pengendali_teknis_id" class="col-form-label">Pengendali Teknis</label>
                              <div>
                                  <select class="form-control select2-dalnis" name="pengendali_teknis_id" style="width:100%">
                                      @foreach ($dalnis as $dts )
                                          <option value="{{ $dts->id }}">{{ $dts->nama }}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <br>
                              <label for="ketua_tim_id" class="col-form-label">Ketua Tim</label>
                                <div>
                                    <select class="form-control select2-kt" name="ketua_tim_id" style="width:100%">
                                    
                                      @foreach ($pegawai as $kt )
                                          <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                      @endforeach
                                  </select>
                                </div>
                          </div>
                          
                          <div class="col-md-4">
                              <label for="anggota_tim" class="col-form-label">Anggota Tim</label>
                              <div>
                                  <select class="form-control select2-anggota-tim" name="anggotaTim[]" multiple="multiple" style="width:100%">
                                      @foreach ($pegawai as $at )
                                          <option value="{{ $at->id }}">{{ $at->nama }}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <br>
                              <label for="narasumber" class="col-form-label">Narasumber</label>
                              <div>
                                  <select class="form-control select2-narasumber" name="narasumber[]" multiple="multiple" style="width:100%">
                                      @foreach ($pegawai as $at )
                                          <option value="{{ $at->id }}">{{ $at->nama }}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <br>
                              <label for="fasilitator" class="col-form-label">Fasilitator</label>
                              <div>
                                  <select class="form-control select2-fasilitator" name="fasilitator[]" multiple="multiple" style="width:100%">
                                      @foreach ($pegawai as $at )
                                          <option value="{{ $at->id }}">{{ $at->nama }}</option>
                                      @endforeach
                                  </select>
                              </div>
                              
                        
                          </div>
                          <div class="col-md-4">
                              <label for="lokasi" class="col-form-label">Lokasi</label>
                              <input name="lokasi" class="form-control" type="text" placeholder="Mamuju/Majene/dll" id="lokasi">
                              <br>
                              <label for="beban" class="col-form-label">Beban</label>
                              <input name="beban" class="form-control" type="text" placeholder="BPKP/Pemda Mamuju/dll" id="beban">
                              <br>
                              <label for="total_biaya" class="col-form-label">Total Biaya</label>
                              <input name="total_biaya" class="form-control" type="text" placeholder="10000000" id="total_biaya">
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
@endsection