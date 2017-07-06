import VueRouter from 'vue-router';

let routes=[

  // HOME PAGE VUE Components
  {
    path:'/',
    component:require('./components/Berita')
  },
  {
    path:'/pengumuman',
    component:require('./components/Pengumuman')
  },
  {
    path:'/pegawai',
    component:require('./components/Pegawai')
  },
  {
    path:'/penugasan',
    component:require('./components/Penugasan')
  },


  // SPA
  {
    path:'/spa/home',
    components:require('./components/BPKP')
  },
  {
    path:'/spa/berita',
    component:require('./components/Berita')
  },
  {
    path:'/spa/pengumuman',
    component:require('./components/Pengumuman')
  },
  {
    path:'/spa/pegawai',
    component:require('./components/Pegawai')
  },
  {
    path:'/spa/penugasan',
    component:require('./components/Penugasan')
  },



  // Dashboard
  {
    path:'/dashboard',
    component:require('./components/Dashboard')
  },
  {
    path:'/dashboard/obrik',
    component:require('./components/obrik/tableObrik')
  },
  {
    path:'/dashboard/pegawai',
    component:require('./components/Pegawai')
  },
  {
    path:'/dashboard/pengumuman',
    component:require('./components/Pengumuman')
  },

  // Data

  {
    path:'/data/pegawai',
    component:require('./components/Pegawai')
  },
  {
    path:'/data/pengumuman',
    component:require('./components/Pengumuman')
  },
  {
    path:'/data/berita',
    component:require('./components/Berita')
  },

  // obrik
  {
    path:'/obrik',
    component:require('./components/obrik/tableObrik')
  },
  {
    path:'/obrik/grid',
    component:require('./components/obrik/gridObrik')
  },
  {
    path:'/obrik/create',
    component:require('./components/obrik/Form')
  },

];

export default new VueRouter({
  mode: 'history',
  hashbang: false,
  linkActiveClass: 'active',
  saveScrollPosition: true,
  routes
});
