
<div class="hidden-xs text-center" >
  <div class="panel panel-default">
    <div class="panel-heading" style="box-shadow: 1px 1px 1px 1px #000; padding-bottom: 0px">
      <ul class="list-inline">
        <li>
          <router-link class="btn btn-default btn-sm" to="/" exact>
            Berita &nbsp;<i class="fa fa-newspaper-o fa-fw"></i>
          </router-link>
        </li>
        <li>
          <router-link class="btn btn-default btn-sm" to="/data/pengumuman">
            Pengumuman &nbsp;<i class="fa fa-comment-o -o fa-fw"></i>
          </router-link>
        </li>
        <li>
          <router-link class="btn btn-default btn-sm" to="/data/pegawai">
            Pegawai &nbsp;<i class="fa fa-vcard-o fa-fw"></i>
          </router-link>
        </li>
        <li>
          <router-link class="btn btn-default btn-sm" to="/data/tugas">
            Tugas &nbsp;<i class="fa fa-briefcase fa-fw"></i>
          </router-link>
        </li>
      </ul>
    </div>
  </div>
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
