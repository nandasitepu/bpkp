@foreach ($spip as $s)
  <tr class="text-center">
    <td class="col-md-1">
      @if ( $s->level_spip_id == 1 )
        {{$s->sub_unsur_spip_id}}
      @endif
    </td>
    <td class="col-md-4 text-justify">
      @if ( $s->level_spip_id == 1 )
        {{$s->sub_unsur_spip->nama}}
      @endif
    </td>
    <td class="col-md-1">{{$s->level_spip_id}}</td>
    <td class="col-md-3">{{$s->dokumen}}</td>
    <td class="col-md-3">{{$s->catatan}}</td>
  </tr>
@endforeach
