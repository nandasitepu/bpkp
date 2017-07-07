<div class="row">
  <div>

    <ul class="list-inline hidden-xs text-center">
      <span class="pull-left" style="font-family:Lato"><small><b>Pencarian:&nbsp;</b></small> </span> 
      <li><span class="label label-default"> APIP </span></li>
      <li><span class="label label-default"> SPIP </span></li>
      <li><span class="label label-default"> Dana Desa </span></li>
      <li><span class="label label-default"> Auditor </span></li>
      <li><span class="label label-default"> Pengadaan Barang Jasa </span></li>
      <li><span class="label label-default"> Penerimaan PNS </span></li>
      <li><span class="label label-default"> Diklat</span></li>
    </ul>
  </div>
  <div class="input-group">
    <div class="input-group-btn search-panel">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" >
          <span id="search_concept">Filter</span>&nbsp; <i class="fa fa-chevron-down"></i></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#contains">Berita</a></li>
          <li><a href="#its_equal">Pengumuman</a></li>
          <li><a href="#greather_than">Tag</a></li>
          <li class="divider"></li>
          <li><a href="#all">Semua ..</a></li>
        </ul>
    </div>
    <input type="text" class="form-control input-sm text-center bold" name="search" placeholder="Cari...">
    <input type="hidden" name="search_param" value="all" id="search_param">
    <div class="input-group-btn search-panel">
      <div class="input-group-btn" >
        <a href="{{route('search')}}">
          <button class="btn btn-default btn-sm" type="button"> <i class="fa fa-search-plus"></i></button>
        </a>
       </div>
    </div>
  </div>
</div>
