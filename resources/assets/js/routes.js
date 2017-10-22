import VueRouter from 'vue-router';

let routes = [

    /* HOME PAGE VUE Components */
        {
            path: '/',
            component: require('./components/berita/index')
        },
        {
            path: '/pengumuman',
            component: require('./components/pengumuman/index')
        },
        {
            path: '/pegawai',
            component: require('./components/pegawai/index')
        },
        {
            path: '/tugas',
            component: require('./components/tugas/index')
        },

    ////////////////////////////////////////////////////////////
    // APP // SPA // TAMU
        {
            path: '/spa',
            component: require('./components/app/-index1.vue')
        },
        {
            path: '/spa/spip',
            component: require('./components/app/spip')
        },
        {
            path: '/spa/apip',
            component: require('./components/app/apip')
        },
        {
            path: '/spa/fcp',
            component: require('./components/app/fcp')
        },
        {
            path: '/spa/simda',
            component: require('./components/app/simda')
        },
        {
            path: '/spa/sia',
            component: require('./components/app/sia')
        },
        {
            path: '/spa/siskeudes',
            component: require('./components/app/siskeudes')
        },
    
    ////////////////////////////////////////////////////////////
    // DASHBOARD // ADMIN
        {
            path: '/admin/dashboard',
            component: require('./components/admin/dashboard')
        },
        {
            path: '/admin/dashboard/obrik',
            component: require('./components/obrik/index')
        },
        {
            path: '/admin/dashboard/tugas',
            component: require('./components/tugas/admin')
        },
        {
            path: '/admin/dashboard/tugas/show',
            component: require('./components/tugas/show')
        },
        {
            path: '/admin/dashboard/tugas/tambah',
            component: require('./components/tugas/addTugas')
        },
        {
            path: '/admin/dashboard/berita',
            component: require('./components/berita/index')
        },
        {
            path: '/admin/dashboard/pengumuman',
            component: require('./components/pengumuman/admin')
        },


    // DASHBOARD // PEGAWAI
        {
            path: '/dashboard',
            component: require('./components/dashboard')
        },
        {
            path: '/dashboard/tugas',
            component: require('./components/tugas/index.vue')
        },
        {
            path: '/dashboard/obrik',
            component: require('./components/obrik/index')
        },

        {
            path: '/dashboard/pegawai',
            component: require('./components/pegawai/index')
        },

        {
            path: '/dashboard/pengumuman',
            component: require('./components/pengumuman/index')
        },

        {
            path: '/dashboard/berita',
            component: require('./components/berita/index')
        },
        {
            path: '/dashboard/pengumuman', // Ganti Jadi Knowledge Center
            component: require('./components/pengumuman/index')
        },

    // Data
        {
            path: '/data/berita',
            component: require('./components/berita/index')
        },
        {
            path: '/data/pegawai',
            component: require('./components/pegawai/index')
        },
        {
            path: '/data/obrik',
            component: require('./components/obrik/index')
        },
        {
            path: '/data/pengumuman',
            component: require('./components/pengumuman/index')
        },
        {
            path: '/data/tugas',
            component: require('./components/tugas/index')
        },

    // Bidang
        {
            path: '/bid',
            component: require('./components/bidang/index')
        },
        {
            path: '/bid/tu',
            component: require('./components/bidang/TU')
        },
        {
            path: '/bid/ipp',
            component: require('./components/bidang/IPP')
        },
        {
            path: '/bid/apd',
            component: require('./components/bidang/APD')
        },
        {
            path: '/bid/an',
            component: require('./components/bidang/AN')
        },
        {
            path: '/bid/inv',
            component: require('./components/bidang/INV')
        },
        {
            path: '/bid/p3a',
            component: require('./components/bidang/P3A')
        },

    // Berita
        {
            path: '/berita',
            component: require('./components/berita/index')
        },

    // Obrik
        {
            path: '/obrik',
            component: require('./components/obrik/index')
        },
        {
            path: '/obrik/grid',
            component: require('./components/obrik/indexGrid')
        },
        {
            path: '/obrik/create',
            component: require('./components/obrik/addForm')
        },


    // Tugas
        {
            path: '/tugas',
            component: require('./components/tugas/index')
        },
        {
            path: '/tugas/show',
            component: require('./components/tugas/show')
        },
        {
            path: '/tugas/tambah',
            component: require('./components/tugas/addTugas')
        },



];

export default new VueRouter({
    mode: 'history',
    hashbang: false,
    linkActiveClass: 'active',
    saveScrollPosition: true,
    routes
});