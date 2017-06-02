@foreach ($spip5 as $s5)
  <tr class="text-justify">
    <td class="col-md-1 text-center">
      @if ( $s5->spip_level_id == 1 )
        {{$s5->spip_sub_unsur_id}}
      @endif
     </td>
    <td class="col-md-4 text-justify">
      <!-- Should Be Error -->
      @if ( $s5->spip_level_id == 1 )
        {{$s5->spip_sub_unsur->nama}}
      @endif
     </td>
    <td class="col-md-1 text-center">{{$s5->spip_level_id}}</td>
    <td class="col-md-4">{!! $s5->spip_dokumen->nama !!}</td>
    <td>
      <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#mdl{{$s5->spip_level_id}}">
        <i class="fa fa-edit"></i>
      </button>
    </td>

    <td class="col-md-2 text-center">@if ($s5->status == 1)
      <i class="fa fa-check-circle-o fa-2x text-success"></i>
    @elseif ($s5->status == 2 )
      <i class="fa fa-times-circle-o fa-2x text-danger"></i>
    @else
      <i class="fa fa-question-circle fa-2x text-warning"></i>
    @endif</td>
    <td class="col-md-2 text-center" data-toggle="collapse" data-target="#all{{$s5->id}}">
      @if ($s5->catatan == null)
        <i class="fa fa-2x fa-minus-square-o text-info"></i>
      @else
        <i class="fa fa-2x fa-plus-square-o text-danger"></i>
      @endif

    </td>
  </tr>
  <tr>
    <td colspan="6" class="hiddenRow">
        <div id="all{{ $s5->id }}" class="collapse">
          @if ($s5->catatan == null)
            <h5 style="padding-left:40px">Belum ada Catatan</h5>
          @else
            <h5 style="padding-left:40px">{{$s5->catatan}}</h5>
          @endif

        </div>
    </td>
  </tr>
@endforeach
