<div class="row">
  <div class="col-md-12">
    @foreach (App\Post::paginate(3) as $post)
      <div class="message-item" id="m9">
        <div class="message-inner">
          <div class="message-head clearfix">
            <div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=amiya"><img class="pimg" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a></div>
            <div class="user-detail">
              <h5 class="handle">NS</h5>
              <div class="post-meta">
                <div class="asker-meta">
                  <span class="qa-message-what"></span>
                  <span class="qa-message-when">
                    <span class="qa-message-when-data">{{$post->created_at}}</span>
                  </span>
                  <span class="qa-message-who">
                    <span class="qa-message-who-pad">by </span>
                    <span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=amiya">NS</a></span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="qa-message-content">
            {{$post->title}}
          </div>
         </div>
      </div>

    @endforeach
  </div>
</div>
