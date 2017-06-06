import VueRouter from 'vue-router';

let routes=[
  // SPA
  {
    path:'/spa/home',
    components:require('./components/BPKP')
  },
  {
    path:'/spa/pegawai',
    component:require('./components/Pegawai')
  },
  {
    path:'/spa/berita',
    component:require('./components/Berita')
  },
  {
    path:'/spa/penugasan',
    component:require('./components/Penugasan')
  },
  {
    path:'/spa/pengumuman',
    component:require('./components/Pengumuman')
  },


  // Dashboard
  {
    path:'/dashboard',
    component:require('./components/Dashboard')
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
    component:require('./components/Obrik')
  },
  {
    path:'/obrik/create',
    component:require('./components/Form')
  },

];

export default new VueRouter({
  mode: 'history',
  hashbang: false,
  linkActiveClass: 'active',
  saveScrollPosition: true,
  routes
});
