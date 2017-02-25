<div class="row"> <!-- The Services -->
  <div class="col-md-8">
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"></h3>
        </div>
        <div class="panel-body">
          <hr />
          <div class="col-md-3 center">
            <img class="img-rounded svc" src="img/web/data.png" alt="Generic placeholder image" >
            <p></p>
            <a class="btn btn-md btn-default" href="#" role="button">Data &raquo;</a>
            <p></p>
          </div>
          <div class="col-md-3 center">

            <img class="img-rounded svc" src="img/web/assurance2.jpg" alt="Generic placeholder image">
            <p></p>
            <a class="btn btn-md btn-default" href="#" role="button">Assurance &raquo;</a>
            <p></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-md-3 center">

            <img class="img-rounded svc" src="img/web/consulting3.jpg" alt="Generic placeholder image">
            <p></p>
            <p><a class="btn btn-md btn-default" href="#" role="button">Consulting &raquo;</a></p>
              <p></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-md-3 center">

            <img class="img-rounded svc" src="img/web/q&a.png" alt="Generic placeholder image">
            <p></p>
            <p><a class="btn btn-md btn-default" href="#" role="button">Q&A &raquo;</a></p>
              <p></p>
          </div><!-- /.col-lg-4 -->
          <hr />
        </div>
        <div class="panel-footer">

        </div>
      </div>
  </div>
  <div class="col-md-4">
    <br>
    <div class="panel panel-info">
      <div class="panel-body">
        Menu
      </div>
    </div>
  </div>
</div>
<div class="row"><!-- Home Tabs + Sidebars -->
  <div class="col-md-8"> <!-- Home Tabs -->
    <div class="panel panel-default">
      <div class="panel-body">
        <div  class="col-sm-12">
         <div class="col-md-1 col-xs-2">
             <!-- required for floating -->
             <!-- Nav tabs -->
             <div class="hidden-xs">
               <ul class="nav nav-tabs tabs-left vertical-text">
                   <li class="active"><a href="#home-v" data-toggle="tab">Berita</a></li>
                   <li><a href="#profile-v" data-toggle="tab">Pengumuman</a></li>
                   <li><a href="#messages-v" data-toggle="tab">Data</a></li>
                   <li><a href="#settings-v" data-toggle="tab">Pegawai  </a></li>
               </ul>
             </div>
         </div>
         <div class="col-md-11 col-xs-12">
             <!-- Tab panes -->
             <div class="tab-content">
                 <div class="tab-pane active" id="home-v">
                   <h4>Berita Terbaru</h4>
                   @include('post.mod.timeline')
                 </div>
                 <div class="tab-pane col-md-10" id="profile-v" >

                 </div>
                 <div class="tab-pane" id="messages-v">Messages Tab.</div>
                 <div class="tab-pane" id="settings-v">Settings Tab.</div>
             </div>
         </div>
         <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <ul class="nav nav-tabs" role="tablist">
       <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">#</a></li>
       <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
       <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Commented</a></li>
       <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Forum</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">

        <div id="gpr-kominfo-widget-container"></div>
         <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
      </div>
      <div role="tabpanel" class="tab-pane" id="popular">
        @include('post.mod.popular')
      </div>
      <div role="tabpanel" class="tab-pane" id="messages">
        @include('post.mod.commented')
      </div>
      <div role="tabpanel" class="tab-pane" id="settings">...</div>
    </div>

  </div>

</div>
