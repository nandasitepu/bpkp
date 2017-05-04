@foreach ($spip1 as $s1)
  <tr class="text-center">
    <td class="col-md-1">
      @if ( $s1->level_spip_id == 1 )
        {{$s1->sub_unsur_spip_id}}
      @endif
    </td>
    <td class="col-md-4 text-justify">
      @if ( $s1->level_spip_id == 1 )
        {{$s1->sub_unsur_spip->nama}}
      @endif
    </td>
    <td class="col-md-1">{{$s1->level_spip_id}}</td>
    <td class="col-md-3">{{$s1->dokumen}}</td>
    <td class="col-md-3">{{$s1->catatan}}</td>
  </tr>
@endforeach
