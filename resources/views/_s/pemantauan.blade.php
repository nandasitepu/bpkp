@foreach ($spip5 as $s5)
  <tr class="text-center">
    <td class="col-md-1">
      @if ( $s5->level_spip_id == 1 )
        {{$s5->sub_unsur_spip_id}}
      @endif
    </td>
    <td class="col-md-4 text-justify">
      @if ( $s5->level_spip_id == 1 )
        {{$s5->sub_unsur_spip->nama}}
      @endif
    </td>
    <td class="col-md-1">{{$s5->level_spip_id}}</td>
    <td class="col-md-3">{{$s5->dokumen}}</td>
    <td class="col-md-3">{{$s5->catatan}}</td>
  </tr>
@endforeach
