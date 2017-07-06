@section('bot_scripts')
  <!-- Facebook -->
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9&appId=115522375157502";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- Twitter -->
  <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
@endsection


    <div class="panel panel-default">
      <div class="panel-body">
        <!-- -->
        <a class="twitter-follow-button" href="https://twitter.com/BPKPgoid" data-show-screen-name="false">
        </a>
        &nbsp; &nbsp;
        <!-- -->
        <script src="https://platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
        <script type="IN/FollowCompany" data-id="8082525" data-counter="right"></script>

        <!-- -->
        <div id="fb-root"></div>
        <div class="fb-like" data-href="https://www.facebook.com/PageBPKP/" data-width="200" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
      </div>

    </div>
