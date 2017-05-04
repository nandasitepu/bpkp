@foreach ($spip4 as $s4)
  <tr class="text-center">
    <td class="col-md-1">
      @if ( $s4->level_spip_id == 1 )
        {{$s4->sub_unsur_spip_id}}
      @endif
    </td>
    <td class="col-md-4 text-justify">
      @if ( $s4->level_spip_id == 1 )
        {{$s4->sub_unsur_spip->nama}}
      @endif
    </td>
    <td class="col-md-1">{{$s4->level_spip_id}}</td>
    <td class="col-md-3">{{$s4->dokumen}}</td>
    <td class="col-md-3">{{$s4->catatan}}</td>
  </tr>
@endforeach
