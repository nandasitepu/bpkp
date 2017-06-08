@extends('main')
@section('title')
  Kontak Kami
@endsection
@section('stylesheets')

@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="carousel text-center" role="listbox">
            <div class="item active">
              <img class="img-thumbnail img-responsive" src="{{asset('img/web/kontak.jpg')}}" alt="kontak">
            </div>
          </div>
        </div>
    </div>
    <div class="row">
          <div class="col-md-8">
              <div class="well well-sm">
                  <form action="{{url('kontak')}}" method="POST">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Nama</label>
                              <input type="text" name="nama" class="form-control" id="name" placeholder="Enter name" required="required" />
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email </label>
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                  </span>
                                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                          </div>
                          <div class="form-group">
                              <label for="subject">
                                  Tentang</label>
                              <select id="subject" name="tentang" class="form-control" required="required">
                                  <option value="na" selected="">Pilih Satu:</option>
                                  <option value="Tanya">Pertanyaan</option>
                                  <option value="Saran">Saran</option>
                                  <option value="Pengaduan">Pengaduan</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Pesan</label>
                              <textarea name="pesan" id="message" class="form-control" rows="9" cols="25" required="required"
                                  placeholder="Pesan ..."></textarea>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-primary btn-sm pull-right" id="btnContactUs">
                              Kirim Pesan</button>
                      </div>
                  </div>
                  </form>
              </div>
          </div>
          <div class="col-md-4">
              <form>
              <legend><span class="glyphicon glyphicon-globe"></span> Alamat Kantor</legend>
              <address>
                  <strong>Perwakilan BPKP Provinsi Sulawesi Barat</strong><br>
                  Jl. Abdul Malik Pattana Endeng, Mamuju<br>
                  Sulawesi Barat 91512<br>
                  <abbr title="Phone">
                    Phone:
                  </abbr>
                    (0426) 21088
                    <br>
                  <abbr title="Phone">
                    Fax:
                  </abbr>
                    (0426) 21137
              </address>
              <address>
                  <strong>Sulbar Hebat </strong><br>
                  Email :
                  <a href="mailto:#"> sulawesi.barat@bpkp.go.id</a>
              </address>
              </form>
          </div>
      </div>
  </div>
@endsection
