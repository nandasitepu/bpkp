@extends('spa')

@section('content')
  <div id="app">
    <ul class="nav nav-pills">
      <li class="in active"><router-link to="/pegawai">Home</router-link></li>
      <li><router-link to="/oke">Oke</router-link></li>
      <li><router-link to="/produk">Produk</router-link></li>
      <li></li>
    </ul>
    <router-view></router-view>
  </div>
@endsection
