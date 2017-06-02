<div class="text-center">
  <ul class="list-inline hidden-xs">
    <b class="pull-left"><small>Hot Search:</small></b>
    <li><span class="label label-primary"> APIP </span></li>
    <li><span class="label label-primary"> SPIP </span></li>
    <li><span class="label label-success"> Dana Desa </span></li>
    <li><span class="label label-success"> Auditor </span></li>
    <li><span class="label label-warning"> Pengadaan Barang Jasa </span></li>
    <li><span class="label label-warning"> Penerimaan PNS </span></li>
  </ul>
</div>
<div class="input-group">
  <div class="input-group-btn search-panel">
      <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
        <span id="search_concept">Filter</span> <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#contains">Berita</a></li>
        <li><a href="#its_equal">Pengumuman</a></li>
        <li><a href="#greather_than">Tag</a></li>
        <li class="divider"></li>
        <li><a href="#all">Semua ..</a></li>
      </ul>
  </div>
  <input type="hidden" name="search_param" value="all" id="search_param">
  <input type="text" class="form-control input-sm text-center" name="x" placeholder="Cari...">
  <div class="input-group-btn search-panel">
      <a href="{{route('search')}}">
        <button type="button" class="btn btn-default btn-sm " >
          <i class="fa fa-fw fa-search-minus"></i>
        </button>
      </a>
  </div>
</div>
