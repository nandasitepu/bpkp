
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-header">
          <!-- Branding Image -->
            <div class="">
              <a class="navbar-brand text-center" href="{{ url('/') }}">
                <h6>© Copyright 2017</h6>
              </a>


            </div>
            <!-- Collapsed Hamburger -->
        </div>
        <div class="collapse navbar-collapse navbar-right" id="app-navbar-bottom">
            <!-- Left Side Of Navbar -->
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right text-center">
                <!-- Authentication Links -->
                  <li><a href="{{route('disclaimer')}}">Disclaimer</a></li>
                  <li><a href="{{route('sdank')}}">Syarat & Ketentuan</a></li>
                  <li><a href="{{route('faq')}}">FAQ</a></li>
            </ul>
        </div>
    </div>
 </nav>
