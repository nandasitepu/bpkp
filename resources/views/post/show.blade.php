@extends('main')
@section('title')
  {{$post->name}}
@endsection
@section('stylesheets')
  <link rel="stylesheet" href="/css/show.css">
@endsection

@section('content')

  <article>
      <header>

          <h1>{{$post->name}}</h1>

      </header>

      <div class="background-bar">

      </div>

      <div class="container-fluid main-body">
          <section class="row">

              <div class="hidden-xs col-sm-1 col-md-2">

              </div>

              <div class="col-xs-12 col-sm-10 col-md-8">

                  <div class="content-holder">

                      <div class="content-description">

                          <div class="author-social author-social-left">
                            <a class="btn btn-warning" href="{{route('posting.show', $post->id - 1)}}">
                                <i class="fa fa-arrow-circle-o-left fa-lg"></i> &nbsp; Sebelumnya
                            </a>

                          </div>
                          <div class="author-social author-social-right">
                            <a class="btn btn-success" href="{{route('posting.show', $post->id + 1)}}">
                                 Selanjutnya &nbsp; <i class="fa fa-arrow-circle-o-right fa-lg"></i>
                            </a>
                          </div>


                          <div class="author-avatar">
                              <img src="/img/lorem/90x90.jpg" class="img-circle" />
                          </div>
                          <div class="author-name">
                              <h3>Author Name</h3>
                          </div>
                          <div class="row blog-info">
                              <div class="col-xs-12 col-sm-6">
                                <span class="text-muted"><i class="fa fa-clock-o"></i> Dibuat: 37 hari lalu</span>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <span class="text-muted"><i class="fa fa-tags"></i> Tags: -</span>
                              </div>
                          </div>

                      </div>

                      <div class="content-body text-justify">
                        {{$post->body}}
                      </div>

                  </div>

              </div>

              <div class="hidden-xs col-sm-1 col-md-2">

              </div>

          </section>

      </div>

  </article>
  <br>
@endsection
