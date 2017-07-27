import VueRouter from 'vue-router';

let routes=[

  // HOME PAGE VUE Components
    {
      path:'/',
      component:require('./components/berita/index')
    },
    {
      path:'/pengumuman',
      component:require('./components/pengumuman/index')
    },
    {
      path:'/pegawai',
      component:require('./components/pegawai/index')
    },
    {
      path:'/tugas',
      component:require('./components/tugas/index')
    },


  // SPA
    {
      path:'/spa/home',
      components:require('./components/BPKP')
    },
    {
      path:'/spa/berita',
      component:require('./components/berita/index')
    },
    {
      path:'/spa/pengumuman',
      component:require('./components/pengumuman/index')
    },
    {
      path:'/spa/pegawai',
      component:require('./components/pegawai/index')
    },
    {
      path:'/spa/tugas',
      component:require('./components/tugas/index')
    },

  // Dashboard
    {
      path:'/dashboard/obrik',
      component:require('./components/obrik/index')
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
      path:'/data/berita',
      component:require('./components/berita/index')
    },
    {
      path:'/data/pegawai',
      component:require('./components/pegawai/index')
    },
    {
      path:'/data/obrik',
      component:require('./components/obrik/index')
    },
    {
      path:'/data/tugas',
      component:require('./components/tugas/index')
    },

  // Bidang
    {
      path:'/bid',
      component:require('./components/bidang/index')
    },
    {
      path:'/bid/tu',
      component:require('./components/bidang/TU')
    },
    {
      path:'/bid/ipp',
      component:require('./components/bidang/IPP')
    },
    {
      path:'/bid/apd',
      component:require('./components/bidang/APD')
    },
    {
      path:'/bid/an',
      component:require('./components/bidang/AN')
    },
    {
      path:'/bid/inv',
      component:require('./components/bidang/INV')
    },
    {
      path:'/bid/p3a',
      component:require('./components/bidang/P3A')
    },

  // Berita
  {
    path:'/berita',
    component:require('./components/berita/index')
  },

  // Obrik
  {
    path:'/obrik',
    component:require('./components/obrik/index')
  },
  {
    path:'/obrik/grid',
    component:require('./components/obrik/indexGrid')
  },
  {
    path:'/obrik/create',
    component:require('./components/obrik/addForm')
  },


  // Tugas
  {
    path:'/tugas',
    component:require('./components/tugas/index')
  },
  {
    path:'/tugas/show',
    component:require('./components/tugas/show')
  },
  {
    path:'/tugas/tambah',
    component:require('./components/tugas/addTugas')
  },


];

export default new VueRouter({
  mode: 'history',
  hashbang: false,
  linkActiveClass: 'active',
  saveScrollPosition: true,
  routes
});
