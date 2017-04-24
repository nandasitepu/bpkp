@extends('main')
@section('title')
  Index Page
@endsection
@section('stylesheets')

@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">List of Pages</h3>
          </div>
          <div class="panel-body">
            <ul class="fa-ul">
              @foreach ($pages as $pg )
                <li>
                  <i class="fa-li fa fa-check-square"></i>{{$pg->title}}
                  <span class="label label-primary pull-right">>> | {{$pg->created_at}}</span>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="panel-footer">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        @component('_c.login')@endcomponent
      </div>
    </div>
  </div>
@endsection
