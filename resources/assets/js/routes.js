import VueRouter from 'vue-router';

let routes=[
  // SPA
  {
    path:'/spa',
    component:require('./components/SPA')
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

];

export default new VueRouter({
  mode: 'history',
  hashbang: false,
  linkActiveClass: 'active',
  saveScrollPosition: true,
  routes
});
