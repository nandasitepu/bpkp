
<div class="row">
  <div class="col-md-12">
    @foreach (App\Post::paginate(5) as $post)
      <ul>
        <br />
        <i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;
        <b>{{$post->title}}</b>
        <h5>{{$post->created_at}}</h5>
      </ul>
    @endforeach
  </div>
</div>
