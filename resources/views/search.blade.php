@extends('main')

@section('content')
	<div class="container">
   
    <form method="GET" action="{{ url('search') }}">
			<div class="row">
				<div class="col-md-6">
					<input type="text" name="search" class="form-control" placeholder="Search" value="{{ old('search') }}">
				</div>
				<div class="col-md-6">
					<button class="btn btn-block btn-success">Search</button>
				</div>
			</div>
		</form>
    
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <tr>
            <th>Nama</th>
            <th>NIP</th>
          
          </tr>
          @if($pegawai->count())
            @foreach($pegawai as $p)
            <tr>
              <td>{{ $p->nama }}</td>
              <td>{{ $p->nip }}</td>
          
            </tr>
            @endforeach
          @else
          <tr>
            <td colspan="3">Result not found.</td>
          </tr>
          @endif
        </table>
      
      </div>

    </div>


  </div>
@endsection
