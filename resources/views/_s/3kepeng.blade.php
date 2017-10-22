@foreach ($spip3 as $s3)
  <tr class="text-justify">
    <td class="col-md-1 text-center">
      @if ( $s3->spip_level_id == 1 )
        {{$s3->spip_sub_unsur_id}}
      @endif
     </td>
    <td class="col-md-4 text-justify">
      <!-- Should Be Error -->
      @if ( $s3->spip_level_id == 1 )
        {{$s3->spip_sub_unsur->nama}}
      @endif
     </td>
    <td class="col-md-1 text-center">{{$s3->spip_level_id}}</td>
    <td class="col-md-4">{!! $s3->spip_dokumen->nama !!}</td>
    <td>
    @if(Auth::check())
      <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#mdl{{$s3->spip_level_id}}">
        <i class="fa fa-edit"></i>
      </button>
    @else
      <button type="button" class="btn btn-default btn-sm disabled">
        <i class="fa fa-edit"></i>
      </button>
    @endif
    </td>

    <td class="col-md-2 text-center">@if ($s3->status == 1)
      <i class="fa fa-check-circle-o fa-2x text-success"></i>
    @elseif ($s3->status == 2 )
      <i class="fa fa-times-circle-o fa-2x text-danger"></i>
    @else
      <i class="fa fa-question-circle fa-2x text-warning"></i>
    @endif</td>
    <td class="col-md-2 text-center" data-toggle="collapse" data-target="#all{{$s3->id}}">
      @if ($s3->catatan == null or $s3->catatan == 0)
        <i class="fa fa-2x fa-minus-square-o text-info"></i>
      @else
        <i class="fa fa-2x fa-plus-square-o text-danger"></i>
      @endif

    </td>
  </tr>
  <tr>
    <td colspan="6" class="hiddenRow">
        <div id="all{{ $s3->id }}" class="collapse">
          @if ($s3->catatan == null )
            <h5 style="padding-left:40px">Belum ada Catatan</h5>
          @else
            <h5 style="padding-left:40px">{{$s3->catatan}}</h5>
          @endif

        </div>
    </td>
  </tr>
@endforeach
