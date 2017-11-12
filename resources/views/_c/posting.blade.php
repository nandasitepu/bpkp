
<div class="text-center hidden-xs">
    <br>
    <div class="btn-group">

            <router-link class="btn btn-default btn-sm" to="/" exact>
              Berita &nbsp;<i class="fa fa-newspaper-o fa-fw"></i>
            </router-link>
      
            <router-link class="btn btn-default btn-sm" to="/spa/pengumuman">
              Pengumuman &nbsp;<i class="fa fa-comment-o -o fa-fw"></i>
            </router-link>
       
            <router-link class="btn btn-default btn-sm" to="/spa/pegawai">
              Pegawai &nbsp;<i class="fa fa-vcard-o fa-fw"></i>
            </router-link>
     
            <router-link class="btn btn-default btn-sm" to="/spa/tugas">
              Tugas &nbsp;<i class="fa fa-briefcase fa-fw"></i>
            </router-link>
    </div>
    <br>
</div>

<div class="visible-xs text-center">
  <ul class="list-inline">
      <router-link class="btn btn-default btn-xs" to="/" exact>
        <i class="fa fa-newspaper-o fa-fw"></i>
      </router-link>
    </li>
    <li>
      <router-link class="btn btn-default btn-xs" to="/pengumuman">
        <i class="fa fa-comment-o -o fa-fw"></i>
      </router-link>
    </li>
    <li>
      <router-link class="btn btn-default btn-xs" to="/pegawai">
        <i class="fa fa-vcard-o fa-fw"></i>
      </router-link>
    </li>
    <li>
      <router-link class="btn btn-default btn-xs" to="/tugas">
        <i class="fa fa-briefcase fa-fw"></i>
      </router-link>
    </li>
  </ul>
</div>

<router-view></router-view>
