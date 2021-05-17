require('./bootstrap');

require('alpinejs');

import Vue from 'vue'

Vue.component('register-form', require('./components/RegisterForm.vue').default);
Vue.component('choose-box', require('./components/ChooseBox.vue').default);
Vue.component('exercise', require('./components/Exercise.vue').default);
Vue.component('training-component', require('./components/TrainingComponent.vue').default);
Vue.component('video-component', require('./components/VideoComponent.vue').default);
const app = new Vue({
    el: '#app',

});
