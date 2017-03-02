@extends('main')

@section('stylesheets')
  <link rel="stylesheet" href="/assets/toastr/toastr.min.css" media="screen" title="no title">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Artikel Posts </h4>
        @foreach (App\Post::Paginate(5) as $post)
          <ul class="style-none">
            <li>
              <h4>{{$post->title}}</h4>
            </li>
              <h5>{{$post->created_at}}</h5>
          </ul>
        @endforeach
      </div>
      <div class="col-md-12 text-center">
        {!! App\Post::paginate(10)->links() !!}
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript" src="../js/my-vue.js"></script>
  <script type="text/javascript" src="/js/post.js"></script>
@endsection
