import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import axios from 'axios';

import Home from '@/components/Home.vue';
import TerreniView from '@/components/TerreniView.vue';
import TerreniCreate from '@/components/TerreniCreate.vue';


Vue.config.productionTip = false
Vue.prototype.$axios = axios;

Vue.use(VueRouter)

const routes = [
  {
    path:'/home',
    name: 'home',
    component: Home
  },
  {
    path:'/view/:id',
    name: 'view',
    component: TerreniView
  },
  {
    path:'/create',
    name: 'create',
    component: TerreniCreate
  },
  {
    path:'/edit/:id',
    name: 'edit',
    component: TerreniCreate
  },
  {
    path:'',
    redirect: '/home'
  },
];

const router = new VueRouter({
  mode: 'history',
  routes
})

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')