@extends('main')
@section('title')
  SPIP
@endsection
@section('stylesheets')
<style media="screen">
canvas {
    padding: 0;
    margin: auto;
    display: block;
}
</style>
@endsection

@section('content')
  <div class="container">
      <h5></h5>
      <h4>{{$spip->id}}</h4>
      <h4>{{$spip->dokumen}}</h4>
      <h4>{{$spip->catatan}}</h4>
      <h4>{{$spip->kab_id}}</h4>
      <h4>{{$spip->unsur_spip_id}}</h4>
      <h4>{{$spip->created_at}}</h4>
      <h4>{{$spip->updated_at}}</h4>
  </div>
@endsection
