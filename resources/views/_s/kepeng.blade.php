@foreach ($spip3 as $s3)
  <tr class="text-center">
    <td class="col-md-1">
      @if ( $s3->level_spip_id == 1 )
        {{$s3->sub_unsur_spip_id}}
      @endif
    </td>
    <td class="col-md-4 text-justify">
      @if ( $s3->level_spip_id == 1 )
        {{$s3->sub_unsur_spip->nama}}
      @endif
    </td>
    <td class="col-md-1">{{$s3->level_spip_id}}</td>
    <td class="col-md-3">{{$s3->dokumen}}</td>
    <td class="col-md-3">{{$s3->catatan}}</td>
  </tr>
@endforeach
