@extends('main')
@section('title')
  EDIT | SPIP {{$obrik->nama}}
@endsection
@section('stylesheets')
  <style media="screen">
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    background-color: green;
  }
  </style>
@endsection
@section('content')
  <div class="container">
    <div class="row">
    {!! Form::model($spip,['route'=>['spip.update', $obrik->id, $obrik->short], 'files' => true, 'class' => 'form-group', 'method' => 'PUT']) !!}
      <div class="col-md-10">
        <h4>SPIP Kabupaten {{ucwords($obrik->nama)}}</h4>
        <hr>
        <p>Maturitas {{ucwords($obrik->nama)}}
          <span class="pull-right" style="font-size:1emx">Nilai SPIP =
            <span class="label label-default" style="font-size:2em">{{$obrik->nilai_spip}}</span>
          </span>
        </p>
        <p>Berikut Pemetaan Dokumen SPIP Pada Pemerintah {{ucwords($obrik->nama)}}</p>
        <hr>

        <div class="table table-responsive">
          <table class=" table-condensed table-bordered">
            <thead>
              <tr class="text-center">
                <td>No</td>
                <td>Sub Unsur SPIP</td>
                <td>Level</td>
                <td>Dokumen</td>
                <td>Catatan</td>
              </tr>
            </thead>
            <tbody>
              @foreach ($spip as $s)
                <tr class="text-center">
                  <td class="col-md-1">
                    @if ( $s->level_spip_id == 1 )
                      {{$s->sub_unsur_spip_id}}
                    @endif
                   </td>
                  <td class="col-md-4 text-justify">
                    @if ( $s->level_spip_id == 1 )
                      {{$s->sub_unsur_spip->nama}}
                    @endif
                   </td>
                  <td class="col-md-1">
                    {{$s->level_spip_id}}
                   </td>
                  <td class="col-md-3">
                      {{ Form::textarea($s->dokumen, $s->dokumen, [
                        'class' => ' form-control',
                        'rows'=> '1',
                        'cols' => '40'
                      ])}}
                   </td>
                  <td class="col-md-3">
                    {{ Form::textarea($s->catatan, $s->catatan, [
                      'class' => ' form-control',
                      'rows'=> '1',
                      'cols' => '40'
                    ])}}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <img src="{{asset('img/kab/'. $obrik->short . '.jpg')}}" alt="" height="100px" >
        <h5 class="label label-primary">Pemerintah Kabupaten {{$obrik->short}}</h5>
        <div class="form-group">
          <label for="sel1">Pilih Pemda:</label>
          <select class="form-control" id="kabupaten" onchange="location=this.value">
            <option></option>
            <option value="../../1/provinsi/edit">Provinsi</option>
            <option value="../../2/mamuju/edit">Mamuju</option>
            <option value="../../3/majene/edit">Majene</option>
            <option value="../../4/mamasa/edit">Mamasa</option>
            <option value="../../5/polman/edit">Polman</option>
            <option value="../../6/mateng/edit">Mateng</option>
            <option value="../../7/matra/edit">Matra</option>
          </select>
        </div>
        <span class="input-group-addon"><i class="fa fa-save fa-2x"></i>
          {{ Form::submit('Save Changes', ['class' => 'btn btn-sm btn-block btn-primary', 'style' =>'margin-top:20px'])}}
        </span>
      </div>
      {!! Form::close() !!}
    </div>

  </div>
@endsection
