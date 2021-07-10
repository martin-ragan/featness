require('./bootstrap');

require('alpinejs');

import Vue from 'vue'

Vue.component('register-form', require('./components/RegisterForm.vue').default);
Vue.component('choose-box', require('./components/ChooseBox.vue').default);
Vue.component('exercise', require('./components/Exercise.vue').default);
Vue.component('training-component', require('./components/TrainingComponent.vue').default);
Vue.component('video-component', require('./components/VideoComponent.vue').default);
Vue.component('meal-carousel', require('./components/MealCarousel.vue').default);
Vue.component('meals-holder', require('./components/MealsHolder.vue').default);
Vue.component('meals-popup', require('./components/MealPopup.vue').default);
Vue.component('training-form', require('./components/TrainingForm.vue').default);
Vue.component('top-navigation', require('./components/TopNavigation.vue').default);
const app = new Vue({
    el: '#app',

});
