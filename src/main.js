import Vue from 'vue'
import App from './App.vue'
import VueRouter from "vue-router";
import {
  routes
} from "./routes";

import VueI18n from 'vue-i18n'

import {
  BootstrapVue
}
from 'bootstrap-vue'
import 'bootstrap-vue/dist/bootstrap-vue.css'

global.JQuery = jQuery
global.$ = jQuery;
import jQuery from 'jquery'
window.jQuery = window.$ = jQuery

Vue.use(BootstrapVue)
Vue.use(VueI18n);

Vue.use(VueRouter);


const router = new VueRouter({
  routes,
  mode: 'hash',
  scrollBehavior(to, from, savedPosition) {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve({
          x: 0,
          y: 0
        })
      }, 500)
    })
  }
});

new Vue({
  el: '#app',
  router,
  
  render: h => h(App)
})
