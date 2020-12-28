const { default: Echo } = require('laravel-echo');
require('./bootstrap');
window.Vue = require('vue');
require('alpinejs');
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('country-name', require('./components/CountryNameComponent.vue').default);

const app = new Vue({
    el: '#app',
    mounted(){
        window.Echo.channel('country-tracker')
            .listen('.country-change-event', (e) => {
                console.log("Ok Ok Ok")
            })
    }
});
