@extends('main')

@section('stylesheets')

@endsection

@section('contents')
  <div class="jumbotron jumbotron-sm">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-lg-12">
                  <h3 style="text-align:center"> \\ Silahkan Hubungi Kami // </h3>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-8">
              <div class="well well-sm">
                  <form>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Name</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email Address</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                  </span>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                          </div>
                          <div class="form-group">
                              <label for="subject">
                                  Subject</label>
                              <select id="subject" name="subject" class="form-control" required="required">
                                  <option value="na" selected="">Choose One:</option>
                                  <option value="service">General Customer Service</option>
                                  <option value="suggestions">Suggestions</option>
                                  <option value="product">Product Support</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Message</label>
                              <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                  placeholder="Message"></textarea>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                              Send Message</button>
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
                  Sulawesi Barat 94107<br>
                  <abbr title="Phone">
                      P:</abbr>
                  (123) 456-7890
              </address>
              <address>
                  <strong>Sulbar Belum Hebat !!</strong><br>
                  <a href="mailto:#">sulbar@bpkp32.com</a>
              </address>
              </form>
          </div>
      </div>
  </div>
@endsection
