@extends('main')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>This is The SHOW</h2>
        <hr>
        <p>{{$post->id}}</p>
        <h3>{{$post->name}}</h3>
        <p>{{$post->slug}}</p>
        <p>{{$post->body}}</p>
      </div>
    </div>
  </div>
  <br>
  <br>
@endsection
