
<div class="panel-body">
  <div class="row">
    <div class="col-md-8">
      <h4 class="text-center"><span class="label label-info">Audit Universe | BPKP Perwakilan Sulawesi Barat</span></h4>
      <hr>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center bold">
              <td>No</td>
              <td>Nama Obrik</td>
              <td>Pimpinan</td>
              <td>Detail</td>
            </tr>
          </thead>
          <tbody>
            @foreach (App\Models\Obrik::all() as $ob )
              <tr>
                <td class="text-center">{{$loop->iteration}}</td>
                <td>{{ucwords($ob->nama)}}</td>
                <td>{{ucwords($ob->pimpinan)}}</td>
                <td class="text-center">
                  <div class="btn-group-xs cool">
                    <a href="{{route("obrik.show", $ob->id)}}" class="btn btn-default">
                      <i class="fa fa-fw fa-eye"></i>
                    </a>
                    <a href="{{route("obrik.edit", $ob->id)}}" class="btn btn-info">
                      <i class="fa fa-fw fa-edit"></i>
                    </a>
                    <a href="{{route("obrik.edit", $ob->id)}}" class="btn btn-danger">
                      <i class="fa fa-fw fa-trash-o"></i>
                    </a>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <div class="panel panel-default">
          <div class="panel-body">
            @component('_c.search_xs')@endcomponent
          </div>

        </div>
        <a href="{{route('obrik.create')}}">
          <button type="button" class="btn btn-default btn-block btn-xs">
            Tambah Obrik <i class="fa fa-fw fa-plus-circle"></i>
          </button>
        </a>
      </div>
    </div>
  </div>
</div>
