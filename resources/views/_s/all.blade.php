<style media="screen">
  .hiddenRow {
    padding: 0 !important;
  }
</style>

@foreach ($spip as $s)
  <tr class="text-justify">
    <td class="col-md-1 text-center">
      @if ( $s->spip_level_id == 1 )
        {{$s->spip_sub_unsur_id}}
      @endif
     </td>
    <td class="col-md-4 text-justify">
      <!-- Should Be Error -->
      @if ( $s->spip_level_id == 1 )
        {{$s->spip_sub_unsur->nama}}
      @endif
     </td>
    <td class="col-md-1 text-center">{{$s->spip_level_id}}</td>
    <td class="col-md-4">{!! $s->spip_dokumen->nama !!}</td>
    <td>
      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#mdl{{$s->spip_level_id}}">
        <i class="fa fa-edit"></i>
      </button>

      <!-- Modal -->
      <div class="modal fade" id="mdl{{$s->spip_level_id}}" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">{{$s->spip_sub_unsur->nama}} - Level {{$s->spip_level_id}} </h4>
            </div>
            <div class="modal-body">
              {!! Form::model($spip,['route'=>['spip.update', $s->id], 'files' => true, 'class' => 'form-group', 'method' => 'PUT']) !!}
              <label for="title">Status: 1= "Ya"; 2 = "Tidak"</label>
              {{ Form::textarea( "status", $s->status, [
                'class' => ' form-control',
                'rows'=> '1',
                'cols' => '40'
              ])}}
              <label for="title">Catatan:</label>
              {{ Form::textarea( "catatan", $s->catatan, [
                'class' => ' form-control',
                'rows'=> '1',
                'cols' => '40'
              ])}}

              <span class="">
                {{ Form::submit('Save Changes', ['class' => 'btn btn-sm btn-primary', 'style' =>'margin-top:20px'])}}

              </span>
              {!! Form::close() !!}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </td>
    <td class="col-md-2 text-center">
      @if ($s->status == 1)
        <i class="fa fa-check-circle-o fa-2x text-success"></i>
      @elseif ($s->status == 2 )
        <i class="fa fa-times-circle-o fa-2x text-danger"></i>
      @else
        <i class="fa fa-question-circle fa-2x text-warning"></i>
      @endif
    </td>
    <td class="col-md-2 text-center" data-toggle="collapse" data-target="#all{{$s->id}}">
      @if ($s->catatan == null)
        <i class="fa fa-2x fa-minus-square-o text-info"></i>
      @else
        <i class="fa fa-2x fa-plus-square-o text-danger"></i>
      @endif

    </td>
  </tr>
  <tr>
    <td colspan="6" class="hiddenRow">
        <div id="all{{ $s->id }}" class="collapse">
          @if ($s->catatan == null)
            <h5 style="padding-left:40px">Belum ada Catatan</h5>
          @else
            <h5 style="padding-left:40px">{{$s->catatan}}</h5>
          @endif

        </div>
    </td>
  </tr>
@endforeach
