import VueRouter from 'vue-router';

let routes=[
  {
    path:'/pegawai',
    component:require('./components/Pegawai')
  },
  {
    path:'/oke',
    component:require('./components/Oke')
  },
];

export default new VueRouter({
  mode: 'history',
  routes,
  linkActiveClass: 'active'
});
