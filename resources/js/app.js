require('./bootstrap');

require('alpinejs');

import Vue from 'vue'

Vue.component('register-form', require('./components/RegisterForm.vue').default);
Vue.component('choose-box', require('./components/ChooseBox.vue').default);
const app = new Vue({
    el: '#app',

});
