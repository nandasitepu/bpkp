<template>
  <div>
    <div class="table table-responsive">
      <table id="pegawaiTable" class="table table-condensed table-striped table-bordered" style="background-color:#fff">
        <thead class="text-center bold">
          <tr>
            <td>No</td>
            <td>Nama</td>
            <td>NIP</td>
            <td>Pangkat</td>
            <td>Jabatan</td>
            <td>Foto</td>
          </tr>
        </thead>
        <tbody>
         
        </tbody>
      </table>
    </div>
  </div>

</template>
<script type="text/javascript" src="https://cdn.datatables.net/v/se/jq-3.2.1/jq-3.2.1/dt-1.10.16/datatables.min.js"></script>
<script>
  $('#pegawaiTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: 'api/pegawai/table',
    columns: [
      {data: 'id', name: 'id'},
      {data: 'nama', name: 'nama'},
      {data: 'nip', name: 'nip'},
      {data: 'pangkat', name: 'pangkat'},
      {data: 'jabatan', name: 'jabatan'}
    ]
  })
</script>
