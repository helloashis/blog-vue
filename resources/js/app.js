

require('./bootstrap');

//Vue JS
window.Vue = require('vue');

// Vue Router
import VueRouter from 'vue-router'
Vue.use(VueRouter);

//   v-Form

import {Form,HasError,AlertError } from 'vform'
window.Form = Form;

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);




//    Vue Routes
import {routes} from './routes/route';
const router = new VueRouter({
	routes,
	//mode:"history",

});

// sweetalert2 

import Swal from 'sweetalert2';

window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });

  window.Toast = Toast;

// Toastr 

import toastr from 'toastr';
window.toastr = toastr;



// VueX
import Vuex from 'vuex'

Vue.use(Vuex)
import storeData from "./store/store";

const store = new Vuex.Store(
    storeData
);




Vue.component('home', require('./components/backend/home.vue').default);


const app = new Vue({
    el: '#app',
    router,
    store,
});
