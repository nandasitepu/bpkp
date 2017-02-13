@extends('main')

@section('stylesheets')
  {!!Html::style('assets/parsley/parsley.css')!!}
  {!!Html::style('assets/select2/select2.min.css')!!}
  {!!Html::script('assets/tinymce/tinymce.min.js')!!}

  <script>
 tinymce.init({
   selector: 'textarea',
   plugins: 'link code',
   menubar: false
 });
 </script>

@stop

@section('contents')
<div class="container">
  <div class="row">
    {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true )) !!}
      <div class="col-md-8">
        <h4> New Post: </h4>
      </div>
      <div class="col-md-4 well ">
        {{ Form::submit('Save Post', array('class' => 'btn btn-sm btn-primary btn-block' ))}}
      </div>
      <div class="col-md-8 panel panel-default pad">

          {{ Form::label('title','Title:') }}
          {{ Form::text('title', null, array('class' => 'form-control', 'required' => '')) }}

          {{ Form::label('slug','Slug:') }}
          {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '')) }}

          {{ Form::label('body','Body:') }}
          {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}



      </div>
      <div class="col-md-4">
        <div class="panel panel-default pad">
            {{ Form::label('category','Category:') }}
            {{ Form::select('type', ['L' => 'Large', 'S' => 'Small'],  'S', ['class' => 'select2-single form-control', 'required' => ''])}}
        </div>
        <div class="panel panel-default pad">
          {{ Form::label('tags','Tags:') }}
          {{ Form::select('tags', ['L' => 'Large', 'S' => 'Small'],  'S', ['class' => 'select2-multi form-control', 'required' => ''])}}
        </div>
        <div class="panel panel-default pad">
          {{ Form::label('featured-image','Featured Image:') }}
          {{ Form::file('featured-image') }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection

@section('scripts')
  {!!Html::script('assets/parsley/parsley.min.js')!!}
  {!!Html::script('assets/select2/select2.min.js')!!}

  <script type="text/javascript">
    $('.select2-multi').select2();
  </script>
@stop
