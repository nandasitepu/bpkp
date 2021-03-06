@extends('main')

@section('title')
   Buat ST
@endsection
@section('top_scripts')
    <link href="{{ asset('assets/parsley/parsley.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/parsley/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/parsley/id.js') }}"></script>
    {{--Select 2--}}
    <link href="{{ asset('assets/select2/css/select2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Pilih Nama",
            });
            
        });
    </script>
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #000;
        }
    </style>
@endsection
@section('content')
    <div class="row" class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
             <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    <div class="bs-callout bs-callout-warning hidden">
        <h4>Oh snap!</h4>
        <p>This form seems to be invalid :(</p>
    </div>

    <div class="bs-callout bs-callout-info hidden">
        <h4>Yay!</h4>
        <p>Everything seems to be ok :)</p>
    </div>
    <div class="row"> 
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-heading" style="background:#328cc1;color:#fff">
                    <h4 class="text-center"><b>Surat Tugas </b></h4>
                    <h4><span class="label label-default pull-right"># ID : {{$st->count() + 1}}</span></h4>
                </div>
               
                <div class="panel-body">
                    <form method="POST" action="{{route('st.store')}}" class="form-horizontal" id="form" data-parsley-validate="">
                     {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-4" style="padding:15px">
                                <label for="no_st" class="col-form-label">Nomor ST :</label>
                                <input name="no_st" class="form-control" type="text" value="{!! old('no_st') !!}" placeholder="ST-XXX/PW32/X/2017" id="no_st" required="">
                       
                                <label for="tujuan_st" class="col-form-label">Tujuan ST</label>
                                <input name="tujuan_st" class="form-control" type="text" value="{!! old('tujuan_st') !!}" placeholder="Bupati/Kepala Dinas XYZ" id="tujuan_st" required="">
                      
                                <label for="tipe" class="col-form-label">Tipe :</label>
                                <input name="tipe" class="form-control" type="text" value="{!! old('tipe') !!}" placeholder="Assurance:.../Consulting:... " id="tipe" required="">
                        
                                <label for="bidang" class="col-form-label">Bidang :</label>
                                <input name="bidang" class="form-control" type="text"  value="{!! old('bidang') !!}" placeholder="IPP/APD/dll" id="bidang" required="">
                            </div>
    
                          <div class="col-md-8 well">
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
                            <div class="col-md-4 well">
                                <label for="penanggung_jawab_id" class="col-form-label">Kepala Perwakilan/Plh</label>
                                <div>
                                    <select class="form-control select2" name="penanggung_jawab_id" style="width:100%" required="">
                                        <option value=""></option>
                                        @foreach ($pj as $kaper )
                                            <option value="{{ $kaper->id }}">{{ $kaper->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <label for="pengendali_mutu_id" class="col-form-label">Pengendali Mutu</label>
                                <div>
                                    <select class="form-control select2" name="pengendali_mutu_id" style="width:100%" required="">
                                        <option value=""></option>
                                        @foreach ($daltu as $dtu )
                                            <option value="{{ $dtu->id }}">{{ $dtu->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                 <br>
                                <label for="pengendali_teknis_id" class="col-form-label">Pengendali Teknis</label>
                                <div>
                                    <select class="form-control select2" name="pengendali_teknis_id" style="width:100%" required="">
                                        <option value=""></option>
                                        @foreach ($dalnis as $dts )
                                            <option value="{{ $dts->id }}">{{ $dts->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <label for="ketua_tim_id" class="col-form-label">Ketua Tim</label>
                                 <div>
                                     <select class="form-control select2" name="ketua_tim_id" style="width:100%" required="">
                                        <option value=""></option>
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
                                <input name="lokasi" class="form-control" type="text" value="{!! old('lokasi') !!}" placeholder="Mamuju/Majene/..." id="lokasi" required="">
                                <br>
                                <b>Biaya:  &nbsp; &nbsp;</b>
                                <input name="biaya" class="form-control" type="text" value="{!! old('biaya') !!}" placeholder="Tidak Ada/BPKP/Pemda ABC/..." id="biaya" required="">
                           </div>
                           
                        </div>
                       
                </div>
                <div class="panel-footer">
                    <div class="text-right">
                        <a href="{{route('st.index')}}" class="btn btn-default">Kembali</a> &nbsp; &nbsp;
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