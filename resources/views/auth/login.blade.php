@extends('main')
@section('title')
  Login Page
@endsection
@section('stylesheets')
  <style>
    .file-text { margin-top: .2em; }
    .money-text {margin-top: 2em;}
  </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <hr>
        <div class="col-md-4">
             <div style="padding:30px; border:1px solid #ccc">
              <div class="text-center">
                <h4><span class="label label-primary">Login Pegawai</span></h4>
              </div>
              <hr>
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                  {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <div class="col-md-3"><label for="email" class="control-label">E-Mail</label></div>
                      <div class="col-md-9">
                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-3 control-label">Password</label>

                      <div class="col-md-9">
                          <input id="password" type="password" class="form-control" name="password" required>

                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-12 ">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember"> Remember Me
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-sm btn-primary btn-block">
                              Login
                          </button>

                          <a class="btn btn-link pull-right" href="{{ url('/password/reset') }}">
                            <span class="label label-default"> Forgot Your Password?</span>
                          </a>
                      </div>
                  </div>
              </form>
              
            </div>
        </div>
        
        <div class="col-md-4">
          
           <div style="padding:30px; border:1px solid #ccc">
                <div class="text-center">
                    <h4><span class="label label-default">Menu Penugasan</span></h4>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-md-4">
                        <h5><b><u> Surat:</u></b> </h5>
                        <button class="btn btn-warning fa fa-envelope-o fa-3x"></button>
                    </div>
                    <div class="col-md-4">
                        <h5><b><u> Surat Tugas:</u></b> </h5>
                        <a href="{{route('st.index')}}">
                        <button class="btn btn-primary">
                            <span class="fa-stack fa-lg">
                            <i class="fa fa-file-o fa-stack-2x"></i>
                            <strong class="fa-stack-1x fa-stack-text file-text">ST</strong>
                            </span>
                        </button>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <h5><b><u> ND:</u></b> </h5>
                        <button class="btn btn-success">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-file-o fa-stack-2x"></i>
                            <strong class="fa-stack fa-stack-text file-text"><small>ND</small></strong>
                        </span>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-md-4">
                        <h5><b><u> KM:</u></b> </h5>
                        <button class="btn btn-danger">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-file-o fa-stack-2x"></i>
                            <strong class="fa-stack-1x fa-stack-text file-text"><small>KM</small></strong>
                        </span>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <h5><b><u> CostSheet:</u></b> </h5>
                        <button class="btn btn-default">
                        <span class="fa-stack">
                            <i class="fa fa-money fa-stack-2x"></i>
                            <strong class="fa-stack-1x money-text">Rp</strong>
                        </span>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <h5><b><u> Laporan:</u></b> </h5>
                        <button class="btn btn-info">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-file-text-o fa-stack-2x"></i>
                            <strong class="fa-stack fa-stack-text file-text"><small>L</small></strong>
                        </span>
                        </button>
                    </div>
                </div>
           </div>
            <hr>
        </div>

        <div class="col-md-4">
             <div style="padding:30px; border:1px solid #ccc">
              <div class="text-center">
                <h4><span class="label label-success">Login Admin</span></h4>
              </div>
              <hr>
              <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.login.submit') }}">
                  {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <div class="col-md-3"><label for="email" class="control-label">E-Mail</label></div>
                      <div class="col-md-9">
                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-3 control-label">Password</label>

                      <div class="col-md-9">
                          <input id="password" type="password" class="form-control" name="password" required>

                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-12 ">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember"> Remember Me
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-sm btn-primary btn-block">
                              Login
                          </button>

                          <a class="btn btn-link pull-right" href="{{ url('/password/reset') }}">
                            <span class="label label-default"> Forgot Your Password?</span>
                          </a>
                      </div>
                  </div>
              </form>
              
            </div>
        </div>
        <hr>
    </div>
</div>
@endsection
