@extends('main')

@section('content')
  <div class="container">
    <div id="app">
      <div class="row">
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <ul class="nav nav-pills">
                <li><router-link to="/test">Home</router-link></li>
                <li><router-link to="/layanan">Layanan</router-link></li>
                <li><router-link to="/produk">Produk</router-link></li>
                <li></li>
              </ul>
            </div>
            <div class="panel-body">
                <router-view></router-view>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default">

            <div class="panel-body">
              <router-link to="/create">
                <button type="button" class="btn btn-xs btn-block btn-info">
                  New NoteBook
                </button>
              </router-link>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
