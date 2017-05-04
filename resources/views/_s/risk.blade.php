@foreach ($spip2 as $s2)
  <tr class="text-center">
    <td class="col-md-1">
      @if ( $s2->level_spip_id == 1 )
        {{$s2->sub_unsur_spip_id}}
      @endif
    </td>
    <td class="col-md-4 text-justify">
      @if ( $s2->level_spip_id == 1 )
        {{$s2->sub_unsur_spip->nama}}
      @endif
    </td>
    <td class="col-md-1">{{$s2->level_spip_id}}</td>
    <td class="col-md-3">{{$s2->dokumen}}</td>
    <td class="col-md-3">{{$s2->catatan}}</td>
  </tr>
@endforeach
