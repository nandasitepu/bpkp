@extends('main')

@section('stylesheets')
  <link rel="stylesheet" href="/assets/toastr/toastr.min.css" media="screen" title="no title">
@endsection

@section('contents')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Artikel Posts </h3>
        @foreach (App\Post::Paginate(10) as $post)
          <ul>
            <li>
              <h4>{{$post->title}}</h4>
            </li>
              <h5>{{$post->created_at}}</h5>
          </ul>
        @endforeach
      </div>
      <div class="col-md-12">
        {!! App\Post::paginate(10)->links() !!}
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript" src="/assets/toastr/toastr.min.js"></script>
  <script type="text/javascript" src="/assets/vue/dist/vue.min.js"></script>
  <script type="text/javascript" src="/assets/vue-resource/dist/vue-resource.min.js"></script>
  <script type="text/javascript" src="/js/post.js"></script>
@endsection
