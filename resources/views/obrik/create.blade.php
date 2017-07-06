@extends('main')
@section('title')
  Tambah Obrik
@endsection
@section('stylesheets')
  <link href="{{asset('quill/quill.snow.css')}}" rel="stylesheet">
  <style media="screen">
  #editor {
    height: 200px;
  }
  </style>
@endsection
@section('bot_scripts')
<!-- Include the Quill library -->
<script src="{{asset('quill/quill.js')}}"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    modules: {
      toolbar: [
        [{ header: [1, 2, false] }],
        ['bold', 'italic', 'underline'],
        ['image', 'code-block']
      ]
    },
    placeholder: 'Silahkan Ditambahkan...',
    theme: 'snow'  // or 'bubble'
  });
</script>
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-md-12">
          <h4><span class="label label-info">Tambah Obrik</span></h4>
        </div>
        <div class="">
          {!! Form::open(array('route' => 'obrik.store', 'data-parsley-validate' => '', 'files' => true )) !!}
            <div class="col-md-8 ">
              <div class="row">
                <div class="col-md-9">
                  {{ Form::label('nama','Nama:') }}
                  {{ Form::text('nama', null, array('class' => 'form-control input-sm', 'required' => '')) }}
                </div>
                <div class="col-md-3">
                  {{ Form::label('short','Short:') }}
                  {{ Form::text('short', null, array('class' => 'form-control input-sm', 'required' => '')) }}


                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  {{ Form::label('pimpinan','Pimpinan:') }}
                  {{ Form::text('pimpinan', null, array('class' => 'form-control input-sm', 'required' => '')) }}
                </div>
                <div class="col-md-4" >
                  <div class="form-group label-floating">
                    {{ Form::label('anggaran','Anggaran:') }}
                    {{ Form::text('anggaran', null, array('class' => 'form-control input-sm', 'required' => '') )}}
                  </div>

                </div>
              </div>
              {{ Form::label('keterangan','Keterangan:') }}
              <div id="editor">
                {{ Form::textarea('keterangan', null, array('class' => 'form-control input-sm', 'required' => '', 'rows'=> '10',
                'cols' => '40')) }}
              </div>

              {{ Form::submit('Simpan Data', array('class' => 'btn btn-sm btn-primary btn-block', 'style'=>'margin-top:10px' ))}}
            </div>
            <div class="col-md-4">
              <div class="panel panel-default pad">
                {{ Form::label('foto','Foto:') }}
                {{ Form::file('foto') }}
              </div>

              <div class="panel panel-default pad">
                  {{ Form::label('lokasi','Lokasi:') }}
                  <select class="form-control input-sm" name="lokasi">
                    @foreach ($obrik as $o )
                      <option value="{{ $o->id }}">{{ ucwords ($o->short) }}</option>
                    @endforeach
                  </select>
              </div>

              <div class="panel panel-default pad">
                {{ Form::label('kontak','Kontak:') }}
                {{ Form::textarea('kontak', null, array('class' => 'form-control input-sm', 'required' => '', 'rows'=> '2') )}}
              </div>

            </div>
          {!! Form::close() !!}
        </div>

      </div>
    </div>
  </div>



@endsection
