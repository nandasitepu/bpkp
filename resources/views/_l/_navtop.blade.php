<nav class="navbar navbar-default">
  <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <div>
            <a class="navbar-brand" href="/">
              <span><img src="/img/web/logo-bpkp.jpg" height="24px" margin-top="1px" /></span>
              <span>
                <span class="Lato bold" margin-top="5px">
                  &nbsp;  Sulawesi Barat &nbsp; <i class="fa fa-user-secret fa-fw"></i>
                </span>
              </span>
            </a>
          </div>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-black-tie fa-lg fa-fw"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <div class="row">
            <div class="col-xs-12">
              <!-- Links -->
              <ul class="nav navbar-nav navbar-right hidden-xs">
                <li>
                  <a href="{{route('profil')}}">
                    <i class="fa fa-info-circle" aria-hidden="true">
                      <span class="lato">&nbsp;  <b>profil</b></span>
                    </i>
                  </a>
                </li>
                <li>
                  <a href="{{route('rkt')}}">
                    <i class="fa fa-list" aria-hidden="true">
                      <small class="lato">&nbsp;  <b>RKT</b></small>
                    </i>
                  </a>
                </li>
                <li>
                  <a href="{{route('data')}}">
                    <i class="fa fa-bar-chart-o" aria-hidden="true">
                      <span class="lato">&nbsp;  <b>data</b></span>
                    </i>
                  </a>
                </li>
                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true">
                <span class="lato">&nbsp;  <b>forum</b></span></i></a>
                </li>
                <li><a href="/kontak"><i class="fa fa-envelope-o" aria-hidden="true">
                <span class="lato">&nbsp;  <b>kontak</b> </span></i></a></li>
                <li>
                  <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp; Bidang</a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right visible-xs text-center">
                <li>
                  <a href="{{route('profil')}}"><i class="fa fa-info-circle" aria-hidden="true">
                   <span class="lato">&nbsp;  <b>profil</b></span></i>
                  </a>
                </li>
                <li><a href="{{route('rkt')}}"><i class="fa fa-list" aria-hidden="true">
                <span class="lato">&nbsp;  <b>RKT</b></span>
                </i></a></li>
                <li><a href="/data"><i class="fa fa-bar-chart-o">
                </i><span class="lato">&nbsp;  <b>data</b></span>
                </a></li>
                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true">
                <span class="lato">&nbsp;  <b>forum</b></span></i></a></li>
                <li><a href="/kontak"><i class="fa fa-envelope-o" aria-hidden="true">
                <span class="lato">&nbsp;  <b>kontak</b> </span></i></a></li>
                <li>
                  <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse-xs" aria-expanded="false" aria-controls="nav-collapse1"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp; Bidang</a>
                </li>
              </ul>
              <!-- Contents -->
              <ul class="collapse nav navbar-nav nav-collapse hidden-xs" id="nav-collapse1">
                  <li>
                    <a href={{route('bid.tu')}}><i class="fa fa-clock-o" aria-hidden="true">  <span class="lato"></i>&nbsp; TU</span></a>
                  </li>
                  <li>
                    <a href={{route('bid.ipp')}}><i class="fa fa-hotel" aria-hidden="true"></i>  <span class="lato">&nbsp; IPP</span></a>
                  </li>
                  <li>
                    <a href={{route('bid.apd')}}><i class="fa fa-money" aria-hidden="true"></i>  <span class="lato">&nbsp; APD</span></a>
                  </li>

                  <li>
                    <a href={{route('bid.an')}}><i class="fa fa-wheelchair" aria-hidden="true"></i>  <span class="lato">&nbsp; AN</span></a>
                  </li>
                  <li>
                    <a href={{route('bid.inv')}}><i class="fa fa-crosshairs" aria-hidden="true"></i>  <span class="lato">&nbsp; INV</span></a>
                  </li>
                  <li>
                    <a href={{route('bid.p3a')}}><i class="fa fa-wifi" aria-hidden="true">  <span class="lato"></i>&nbsp; P3A</span></a>
                  </li>

              </ul>
              <ul class="collapse nav navbar-nav nav-collapse visible-xs" id="nav-collapse-xs">
                <div class="col-xs-6 nav navbar-nav bid">
                  <li>
                    <a href="{{route('bid.apd')}}">
                      <button class="btn btn-block btn-sm btn-default">
                        <i class="fa fa-money" aria-hidden="true"></i>&nbsp; APD
                      </button>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('bid.ipp')}}">
                      <button class="btn btn-block btn-sm btn-default">
                        <i class="fa fa-hotel" aria-hidden="true"></i>&nbsp; IPP
                      </button>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('bid.an')}}">
                      <button class="btn btn-block btn-sm btn-default">
                        <i class="fa fa-bath" aria-hidden="true"></i>&nbsp; AN
                      </button>
                    </a>
                  </li>
                </div>
                <div class="col-xs-6 nav navbar-nav bid">
                  <li>
                    <a href="{{route('bid.inv')}}">
                      <button class="btn btn-block btn-sm btn-default">
                        <i class="fa fa-headphones" aria-hidden="true"></i>&nbsp; INV
                      </button>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('bid.p3a')}}">
                      <button class="btn btn-block btn-sm btn-default">
                        <i class="fa fa-wifi" aria-hidden="true"></i>&nbsp; P3A
                      </button>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('bid.tu')}}">
                      <button class="btn btn-block btn-sm btn-default">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; TU
                      </button>
                    </a>
                  </li>
                </div>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
</nav><!-- /.navbar -->
