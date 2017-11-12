@extends('main')

@section('title')
   Buat KM
@endsection
@section('top_scripts')
    <link href="{{ asset('assets/select2/css/select2.min.css') }}" rel="stylesheet">
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #000;
        }
    </style>
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
               
                <div class="panel-heading" style="background:#76323f;color:#fff">
                    <h4 class="text-center"><b>Kendali Mutu </b></h4>
                    <h4><span class="label label-default pull-right"># ID : {{$km->count() + 1}}</span></h4>
                </div>
               
                <div class="panel-body">
                    <form method="POST" action="{{route('st.store')}}" class="form-horizontal" id="form">
                     {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-3" style="padding:15px">
                                <label for="no_st" class="col-form-label">Nomor ST</label>
                                <input name="no_st" class="form-control" type="text" value="{!! old('no_st') !!}" placeholder="ST-XXX/PW32/X/20XX" id="no_st">

                                <label for="no_st" class="col-form-label">Nomor Kendali Mutu/Kartu Penugasan :</label>
                                <input name="no_st" class="form-control" type="text" value="{!! old('no_st') !!}" placeholder="KP-XXX/PW32/X/2017" id="no_kp">
                                <hr>
                                <label for="obrik" class="col-form-label">Obyek :</label>
                                <input name="obrik" class="form-control" type="text" value="{!! old('obrik') !!}" placeholder="Dinas A/B/C" id="obrik">
                        
                                <label for="sasaran" class="col-form-label">Sasaran :</label>
                                <input name="sasaran" class="form-control" type="text"  value="{!! old('sasaran') !!}" placeholder="Kegiatan A/B/C" id="sasaran">

                                 <label for="tujuan" class="col-form-label">Tujuan :</label>
                                <input name="tujuan" class="form-control" type="text"  value="{!! old('tujuan') !!}" placeholder="Assurance" id="bidang">
                            </div>
    
                          <div class="col-md-9">
                                <div class="row well">
                                    <div class="col-md-4">
                                        <label for="pengendali_mutu_id" class="col-form-label">Pengendali Mutu</label>
                                        <select class="form-control select2" name="pengendali_mutu_id" style="width:100%">
                                            <option></option>
                                            @foreach ($daltu as $dtu )
                                                <option value="{{ $dtu->id }}">{{ $dtu->nama }}</option>
                                            @endforeach
                                        </select>

                                        <label for="hp" class="col-form-label">HP Daltu</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pengendali_teknis_id" class="col-form-label">Pengendali Teknis</label>
                                        <select class="form-control select2" name="pengendali_teknis_id" style="width:100%">
                                            <option></option>
                                            @foreach ($dalnis as $dts )
                                                <option value="{{ $dts->id }}">{{ $dts->nama }}</option>
                                            @endforeach
                                        </select>

                                        <label for="hp" class="col-form-label">HP Dalnis</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ketua_tim_id" class="col-form-label">Ketua Tim</label>
                                        <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                            <option></option>
                                            @foreach ($pegawai as $kt )
                                                <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                            @endforeach
                                        </select>

                                        <label for="hp" class="col-form-label">HP KT</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 well">
                                        <label for="ketua_tim_id" class="col-form-label">Anggota Tim 1</label>
                                        <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                            <option></option>
                                            @foreach ($pegawai as $kt )
                                                <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                            @endforeach
                                        </select>

                                        <label for="ketua_tim_id" class="col-form-label">Anggota Tim 2</label>
                                        <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                            <option></option>
                                            @foreach ($pegawai as $kt )
                                                <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                            @endforeach
                                        </select>

                                        <label for="ketua_tim_id" class="col-form-label">Anggota Tim 3</label>
                                        <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                            <option></option>
                                            @foreach ($pegawai as $kt )
                                                <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                            @endforeach
                                        </select>

                                        <label for="ketua_tim_id" class="col-form-label">Anggota Tim 4</label>
                                        <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                            <option></option>
                                            @foreach ($pegawai as $kt )
                                                <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                            @endforeach
                                        </select>

                                        <label for="ketua_tim_id" class="col-form-label">Anggota Tim 5</label>
                                        <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                            <option></option>
                                            @foreach ($pegawai as $kt )
                                                <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="hp" class="col-form-label">HP AT 1</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">
                                        
                                        <label for="hp" class="col-form-label">HP AT 2</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">
                                       
                                        <label for="hp" class="col-form-label">HP AT 3</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">

                                        <label for="hp" class="col-form-label">HP AT 4</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">

                                        <label for="hp" class="col-form-label">HP AT 5</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">
                                    </div>

                                    <div class="col-md-4 well">
                                        

                                            <label for="ketua_tim_id" class="col-form-label">Anggota Tim 6</label>
                                            <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                                <option></option>
                                                @foreach ($pegawai as $kt )
                                                    <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                                @endforeach
                                            </select>

                                            <label for="ketua_tim_id" class="col-form-label">Anggota Tim 7</label>
                                            <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                                <option></option>
                                                @foreach ($pegawai as $kt )
                                                    <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                                @endforeach
                                            </select>

                                            <label for="ketua_tim_id" class="col-form-label">Anggota Tim 8</label>
                                            <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                                <option></option>
                                                @foreach ($pegawai as $kt )
                                                    <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                                @endforeach
                                            </select>

                                            <label for="ketua_tim_id" class="col-form-label">Anggota Tim 9</label>
                                            <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                                <option></option>
                                                @foreach ($pegawai as $kt )
                                                    <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                                @endforeach
                                            </select>

                                            <label for="ketua_tim_id" class="col-form-label">Anggota Tim 10</label>
                                            <select class="form-control select2" name="ketua_tim_id" style="width:100%">
                                                <option></option>
                                                @foreach ($pegawai as $kt )
                                                    <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="col-md-2">
                                        

                                        <label for="hp" class="col-form-label">HP AT 6</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">

                                        <label for="hp" class="col-form-label">HP AT 7</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">
                                        
                                        <label for="hp" class="col-form-label">HP AT 8</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">

                                        <label for="hp" class="col-form-label">HP AT 9</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">
                                        
                                        <label for="hp" class="col-form-label">HP AT 10</label>
                                        <input name="hp" class="form-control input-sm" type="text" value="{!! old('hp') !!}" placeholder="Hari" id="hp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                  
                       
                </div>
                <div class="panel-footer">
                    <div class="text-right">
                        <a href="{{route('km.index')}}" class="btn btn-default">Kembali</a> &nbsp; &nbsp;
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