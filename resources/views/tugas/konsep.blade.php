@extends('main')

@section('contents')

  <div class="container">
    <h3 class="center">Konsep Surat Tugas</h3>
    <hr />
    <div class="row">
      <div class="col-md-12">
        <div class="form-group row">
          <div class="col-xs-12">
            <label for="no-st" class="col-form-label">Input No ST:</label>
            <input class="form-control" type="text" value="ST-..." id="no-st">
          </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-12">
          <label for="example-datetime-local-input" class="col-form-label">Tanggal ST</label>

            <input class="form-control" type="date" value=".." id="example-datetime-local-input">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-12">
            <label for="nama-tugas" class="col-form-label">Nama Tugas:</label>
            <textarea class="form-control" rows="6" type="text-area" value="Tugas .." id="nama-tugas"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="example-url-input" class="col-xs-2 col-form-label">URL</label>
          <div class="col-xs-10">
            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
          <div class="col-xs-10">
            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
          <div class="col-xs-10">
            <input class="form-control" type="password" value="hunter2" id="example-password-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-number-input" class="col-xs-2 col-form-label">Number</label>
          <div class="col-xs-10">
            <input class="form-control" type="number" value="42" id="example-number-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Date and time</label>
          <div class="col-xs-10">
            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-date-input" class="col-xs-2 col-form-label">Date</label>
          <div class="col-xs-10">
            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-month-input" class="col-xs-2 col-form-label">Month</label>
          <div class="col-xs-10">
            <input class="form-control" type="month" value="2011-08" id="example-month-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-week-input" class="col-xs-2 col-form-label">Week</label>
          <div class="col-xs-10">
            <input class="form-control" type="week" value="2011-W33" id="example-week-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-time-input" class="col-xs-2 col-form-label">Time</label>
          <div class="col-xs-10">
            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-color-input" class="col-xs-2 col-form-label">Color</label>
          <div class="col-xs-10">
            <input class="form-control" type="color" value="#563d7c" id="example-color-input">
          </div>
        </div>
      </div>
    </div>

  </div>


@endsection
