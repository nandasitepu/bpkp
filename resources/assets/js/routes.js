import VueRouter from 'vue-router';

let routes=[
  // SPA
  {
    path:'/spa/',
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

  // SPIP
];

export default new VueRouter({
  routes,
  linkActiveClass: 'active'
});
